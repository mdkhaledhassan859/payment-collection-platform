<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Verify-X-Signature
{
    public function handle(Request $request, Closure $next)
    {
        $signature = $request->header('X-X-SIGNATURE');

        $payload = $request->getContent();

        $expected = hash_hmac('sha256', $payload, env('X_SECRET'));

        if ($signature !== $expected) {
            return response()->json([
                'message' => 'Invalid Signature'
            ], 403);
        }

        return $next($request);
    }
}
