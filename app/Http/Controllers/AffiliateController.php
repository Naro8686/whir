<?php

namespace App\Http\Controllers;

use App\Http\Resources\AffiliateResource;
use App\Models\Affiliate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class AffiliateController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'btc_address'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) return response([
            'fields' => $validator->errors()->messages(),
            'status' => 'error'
        ]);
        $data = $validator->validated();
        $affiliate = Affiliate::whereUsername($data['username'])->first();

        if (is_null($affiliate)) {
            $affiliate = Affiliate::create([
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
                'ref' => unique_ref(),
            ]);
        }

        if (!Hash::check($data['password'], $affiliate->password)) return response([
            'fields' => ['password' => 'Invalid password.'],
            'status' => 'error'
        ]);

        $request->session()->regenerate();
        $sessionId = $request->session()->getId();
        $request->session()->put($sessionId, $affiliate->id);
        return response([
            'status' => 'success',
            'redirect' => route('affiliates.cabinet', ['session_id' => $sessionId]),
        ]);
    }

    public function cabinet(Request $request, $sessionId)
    {
        $affiliateId = $request->session()->get($sessionId);
        $affiliate = is_null($affiliateId) ? null : Affiliate::find($affiliateId);
        if (is_null($affiliate)) {
            $request->session()->forget($sessionId);
            $request->session()->regenerate();
            return
                redirect()->route('affiliates.login');
        }
        return view('affiliates.cabinet', [
            'sessionId' => $sessionId,
            'affiliate' => new AffiliateResource($affiliate)
        ]);
    }

    public function changeAddress(Request $request, $sessionId)
    {
        $affiliateId = $request->session()->get($sessionId);
        $affiliate = is_null($affiliateId) ? null : Affiliate::find($affiliateId);
        if (is_null($affiliate)) return response([
            'status' => 'error',
            'redirect' => route('affiliates.login'),
        ]);
        $validator = Validator::make($request->all(), [
            'address' => ['required', 'btc_address', 'unique:affiliates,username,' . $affiliate->id]
        ]);

        if ($validator->fails()) return response([
            'fields' => $validator->errors()->messages(),
            'status' => 'error'
        ]);
        $data = $validator->validated();
        if ($affiliate->update(['username' => $data['address']])) {
            Session::flash('message', 'BTC address changed.');
        }
        return response([
            'status' => 'success',
            'redirect' => route('affiliates.cabinet', ['session_id' => $sessionId]),
        ]);
    }

    public function changePassword(Request $request, $sessionId)
    {
        $affiliateId = $request->session()->get($sessionId);
        $affiliate = is_null($affiliateId) ? null : Affiliate::find($affiliateId);
        if (is_null($affiliate)) return response([
            'status' => 'error',
            'redirect' => route('affiliates.login'),
        ]);
        $validator = Validator::make($request->all(), [
            'password' => ['required']
        ]);

        if ($validator->fails()) return response([
            'fields' => $validator->errors()->messages(),
            'status' => 'error'
        ]);
        $data = $validator->validated();
        if ($affiliate->update(['password' => Hash::make($data['password'])])) {
            Session::flash('message', 'Password changed.');
        }
        return response([
            'status' => 'success',
            'redirect' => route('affiliates.cabinet', ['session_id' => $sessionId]),
        ]);
    }

    public function changeMinPayout(Request $request, $sessionId)
    {
        $affiliateId = $request->session()->get($sessionId);
        $affiliate = is_null($affiliateId) ? null : Affiliate::find($affiliateId);
        if (is_null($affiliate)) return response([
            'status' => 'error',
            'redirect' => route('affiliates.login'),
        ]);
        $validator = Validator::make($request->all(), [
            'min_payout' => ['required', 'numeric', 'min:0.1']
        ]);

        if ($validator->fails()) return response([
            'fields' => $validator->errors()->messages(),
            'status' => 'error'
        ]);
        $data = $validator->validated();
        if ($affiliate->update(['min_payout' => $data['min_payout']])) {
            Session::flash('message', 'Minimum payout changed.');
        }
        return response([
            'status' => 'success',
            'redirect' => route('affiliates.cabinet', ['session_id' => $sessionId]),
        ]);
    }
}
