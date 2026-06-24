<?php

namespace App\Services;

use App\Models\BillPaymentTransaction;
use Illuminate\Support\Facades\Log;

class ReconciliationService
{
    /**
     * Daily reconciliation process
     */
    public function reconcileDaily($date)
    {
        $transactions = BillPaymentTransaction::whereDate('trans_date', $date)->get();

        $summary = [
            'total' => 0,
            'success' => 0,
            'failed' => 0,
            'pending' => 0,
            'mismatch' => 0
        ];

        foreach ($transactions as $txn) {

            $summary['total']++;

            if ($txn->result === 'SUCCESS') {
                $summary['success']++;
            } elseif ($txn->result === 'FAILED') {
                $summary['failed']++;
            } else {
                $summary['pending']++;
            }

            // Example reconciliation rule
            if ($txn->trans_id === null || $txn->result_code === null) {
                $summary['mismatch']++;
                Log::warning('Reconciliation mismatch', [
                    'transaction_id' => $txn->id,
                    'trans_id' => $txn->trans_id
                ]);
            }
        }

        return $summary;
    }
}
