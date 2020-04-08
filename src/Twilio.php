<?php


namespace Grosv\LaravelTwilio;


use Grosv\LaravelTwilio\Actions\SendSMS;
use Twilio\Rest\Client;

class Twilio
{
    public function __construct()
    {
        $this->twilio = new Client(config('twilio.sid'), config('twilio.token'));
    }

    public function sendSMS($message, $to, $from = null)
    {

        return (new SendSMS($this->twilio))->setFrom($from)->setTo($to)->setMessage($message)->execute();
    }
}