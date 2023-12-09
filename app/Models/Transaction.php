<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property string $tx_id
 * @property int|null $affiliate_id
 * @property \Illuminate\Support\Collection $btc_addresses
 * @property string $mix_btc_address
 * @property string|null $qr
 * @property int $fee
 * @property int $delay
 * @property string|null $amount
 * @property string $status
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string|null $country_flag
 * @property string|null $country_name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Affiliate|null $affiliate
 * @property-read int|float|null $fee_percent
 * @property-read \App\Models\Affiliate|null $referrer
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAffiliateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereBtcAddresses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCountryFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereMixBtcAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereQr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction withoutTrashed()
 * @mixin \Eloquent
 */
class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $appends = ['fee_percent'];
    protected $casts = ['btc_addresses' => 'collection'];
    public static array $fee_types = [
        0, 1, 2, 3,
    ];
    public static array $delay_types = [
        0, 1, 2, 4, 8, 16, 24, 48
    ];

    public function getFeePercentAttribute(): float|int|null
    {
        return match ($this->attributes['fee'] ?? null) {
            0 => 1,
            1 => 1.5,
            2 => 2,
            3 => 3,
            default => null,
        };
    }

    public function affiliate(): BelongsTo
    {
        return $this->belongsTo(Affiliate::class);
    }

    public function referrer(): HasOneThrough
    {
        return $this->hasOneThrough(Affiliate::class, Referral::class, 'transaction_id', 'id', 'id', 'affiliate_id');
    }
}
