<?php

return [
    'serverKey' => env('MIDTRANS_SERVER_KEY','SB-Mid-server-BwtV2nt7-zUqqCnznRbjlt9t'),
    'isProduction' => env('MIDTRANS_IS_PRODUCTION', false),
    'isSanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is3ds' => env('MIDTRANS_IS_3DS', true)
];