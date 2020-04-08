# Twilio Wrapper for Laravel

This package is a work in progress. It's not ready to be used in production.

### Installation

```shell script
composer require grosv/laravel-twilio
```

### Usage

Set up your credentials in .env

```dotenv
TWILIO_SID=your_twilio_sid
TWILIO_TOKEN=your_twilio_token
TWILIO_FROM=+1XXXXXXXXXX
TWILIO_SANDBOX_TO=+1XXXXXXXXXX
TWILIO_SANDBOX=true
```

When TWILIO_SANDBOX is set to true all text messages will go to your TWILIO_SANDBOX_TO phone number. When you are ready to go live, set it to false.

Send a text message:

```php
use Grosv\LaravelTwilio\Twilio;

// sendSMS($message, $to, $from = env('TWILIO_FROM'))
$sent = (new Twilio())->sendSMS('Lorem instagram emoji', '+1XXXXXXXXXX');

```

more to come...