<?php

return [
    'sid' => env('TWILIO_SID', ''),
    'token' => env('TWILIO_TOKEN', ''),
    'default_from' => env('TWILIO_FROM', ''),
    'sandbox_to' => env('TWILIO_SANDBOX_TO', ''),
    'sandbox' => env('TWILIO_SANDBOX', true),
];