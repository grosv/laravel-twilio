<?php


namespace Grosv\LaravelTwilio\Actions;


class TwilioAction
{
    public ?string $to;
    public string $from;
    public ?string $message;

    public function __construct()
    {
        $this->from = config('twilio.default_from');
        $this->to = null;
        $this->message = null;
    }

    public function setTo($to): self
    {
        $this->to = config('twilio.sandbox') ? config('twilio.sandbox_to') : $to;

        return $this;
    }

    public function setFrom($from): self
    {
        if (!is_null($from)) {
            $this->from = $from;
        }

        return $this;
    }

    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }

}