<?php

namespace App\Http\Controllers;

use App\Services\BkashService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request, BkashService $bkash)
    {
        $response = $bkash->billPayment([
            'student_id' => $request->student_id,
            'amount' => $request->amount
        ]);

        return response()->json($response);
    }
}
