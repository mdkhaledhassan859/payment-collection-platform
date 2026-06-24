<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateMerchant
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey || $apiKey !== env('MERCHANT_API_KEY')) {
            return response()->json([
                'message' => 'Unauthorized Merchant'
            ], 401);
        }

        return $next($request);
    }
}
