<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStatusRequest extends FormRequest
{
    /**
     * Authorization check
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules
     */
    public function rules(): array
    {
        return [
            'transaction_id' => 'required|string|max:100',
            'student_id'     => 'nullable|string|max:100',
            'mobile_number'  => 'nullable|string|max:20'
        ];
    }

    /**
     * Custom error messages (optional but production-grade)
     */
    public function messages(): array
    {
        return [
            'transaction_id.required' => 'Transaction ID is required',
            'transaction_id.string'   => 'Transaction ID must be a string',
        ];
    }
}
