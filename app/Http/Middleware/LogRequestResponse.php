<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequestResponse
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Payment Request', [
            'payload' => $request->all(),
            'ip' => $request->ip()
        ]);

        $response = $next($request);

        Log::info('Payment Response', [
            'response' => $response->getContent()
        ]);

        return $response;
    }
}
