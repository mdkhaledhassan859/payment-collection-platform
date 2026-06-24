Schema::create('bill_payment_transactions', function (Blueprint $table) {

    $table->id();

    $table->string('student_id');

    $table->decimal('bill_amount', 12, 2);

    $table->decimal('bill_amount_bank_charge', 12, 2);

    $table->string('trans_id')->unique();

    $table->string('result');

    $table->string('result_code');

    $table->string('user_mobile_no');

    $table->timestamps();
});
