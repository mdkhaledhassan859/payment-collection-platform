<?php

namespace App\Services;

class PaymentService
{
    public function billPayment(array $payload)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => env('X_URL'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ]
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response, true);
    }
}
