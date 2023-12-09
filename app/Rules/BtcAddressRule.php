<?php

namespace App\Rules;

use Log;
use Closure;
use Throwable;
use Exception;
use Illuminate\Contracts\Validation\ValidationRule;

class BtcAddressRule implements ValidationRule
{
    const MAINNET = "MAINNET";
    const TESTNET = "TESTNET";

    const MAINNET_PUBKEY = "00";
    const MAINNET_SCRIPT = "05";

    const TESTNET_PUBKEY = "6F";
    const TESTNET_SCRIPT = "C4";

    public static function handle(): string
    {
        return 'btc_address';
    }

    private function typeOf($addr): bool|string
    {

        if (preg_match('/[^1-9A-HJ-NP-Za-km-z]/', $addr)) {
            return false;
        }

        $decoded = $this->decodeAddress($addr);

        if (strlen($decoded) != 50) {
            return false;
        }

        $version = substr($decoded, 0, 2);

        $check = substr($decoded, 0, strlen($decoded) - 8);
        $check = pack("H*", $check);
        $check = hash("sha256", $check, true);
        $check = hash("sha256", $check);
        $check = strtoupper($check);
        $check = substr($check, 0, 8);

        $isValid = ($check == substr($decoded, strlen($decoded) - 8));

        return ($isValid ? $version : false);
    }

    private function isValid($addr, $version = null): bool
    {
        try {
            $type = $this->typeOf($addr);

            if ($type === false) {
                return false;
            }

            if (is_null($version)) {
                $version = self::MAINNET;
            }

            $valids = match ($version) {
                self::MAINNET => [self::MAINNET_PUBKEY, self::MAINNET_SCRIPT],
                self::TESTNET => [self::TESTNET_PUBKEY, self::TESTNET_SCRIPT],
                self::MAINNET_PUBKEY, self::MAINNET_SCRIPT, self::TESTNET_PUBKEY, self::TESTNET_SCRIPT => [$version],
                default => throw new Exception('Unknown version constant'),
            };

            return in_array($type, $valids);
        } catch (Throwable $throwable) {
            Log::error(__METHOD__ . ' - ' . $throwable->getMessage());
        }
        return false;
    }

    private function decodeAddress($data): string
    {

        $charsetHex = '0123456789ABCDEF';
        $charsetB58 = '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';

        $raw = "0";
        for ($i = 0; $i < strlen($data); $i++) {
            $current = (string)strpos($charsetB58, $data[$i]);
            $raw = bcmul($raw, "58", 0);
            $raw = bcadd($raw, $current, 0);
        }

        $hex = "";
        while (bccomp($raw, 0) == 1) {
            $dv = bcdiv($raw, "16");
            $rem = (integer)bcmod($raw, "16");
            $raw = $dv;
            $hex = $hex . $charsetHex[$rem];
        }

        $withPadding = strrev($hex);
        for ($i = 0; $i < strlen($data) && $data[$i] == "1"; $i++) {
            $withPadding = "00" . $withPadding;
        }

        if (strlen($withPadding) % 2 != 0) {
            $withPadding = "0" . $withPadding;
        }

        return $withPadding;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$this->isValid($value, self::MAINNET)) {
            $fail('validation.btc_address')->translate();
        }
    }
}
