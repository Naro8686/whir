<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FixedFloatApi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class FixedFloatController extends Controller
{
    private FixedFloatApi $api;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            $key = $request->header('FIXEDFLOAT_API_KEY');
            $secret = $request->header('FIXEDFLOAT_API_SECRET');
            $this->api = new FixedFloatApi($key, $secret);
            return $next($request);
        });
    }

    public function price(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'type' => ['required', 'in:' . implode(',', [FixedFloatApi::TYPE_FIXED, FixedFloatApi::TYPE_FLOAT])],
            'fromCcy' => ['required'],
            'toCcy' => ['required'],
            'direction' => ['required', 'in:from,to'],
            'amount' => ['required', 'min:0'],
            'usd' => ['sometimes', 'nullable'],
            'ccies' => ['required', 'boolean'],
        ]);

        try {
            if ($validator->fails()) {
                throw new Exception($validator->errors()->first(), 1);
            }
            $response = $this->api->price($validator->validate());
            return response(['code' => FixedFloatApi::RESP_OK, 'data' => $response, 'msg' => 'OK']);
        } catch (Throwable $exception) {
            return response(['code' => $exception->getCode(), 'data' => null, 'msg' => $exception->getMessage()]);
        }

    }

    public function ccies()
    {
        return response(['code' => FixedFloatApi::RESP_OK, 'data' => ['ccies' => $this->api->ccies()], 'msg' => 'OK']);
    }
}
