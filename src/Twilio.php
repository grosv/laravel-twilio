<?php


namespace Edgrosvenor\LaravelTwilio;


class Twilio
{
    private $sid;
    private $token;

    public $to;
    public $from;
    public $message;

    public function construct()
    {
        $this->sid = config('twilio.sid');
        $this->token = config('twilio.token');
    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}