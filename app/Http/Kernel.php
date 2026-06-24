protected $routeMiddleware = [
    'merchant.auth' => \App\Http\Middleware\AuthenticateMerchant::class,
    'bkash.verify' => \App\Http\Middleware\VerifyBkashSignature::class,
    'txn.dedup' => \App\Http\Middleware\CheckDuplicateTransaction::class,
    'payment.log' => \App\Http\Middleware\LogRequestResponse::class,
];
