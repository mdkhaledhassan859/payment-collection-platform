<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\BillPaymentTransaction;

class CheckDuplicateTransaction
{
    public function handle(Request $request, Closure $next)
    {
        $exists = BillPaymentTransaction::where('trans_id', $request->trans_id)->exists();

        if ($exists) {
            return response()->json([
                'message' => 'Duplicate transaction detected'
            ], 409);
        }

        return $next($request);
    }
}
