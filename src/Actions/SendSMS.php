<?php


namespace Grosv\LaravelTwilio\Actions;


use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
use Twilio\Rest\Client;

class SendSMS extends TwilioAction
{

    private Client $twilio;

    public function __construct(Client $twilio)
    {
        parent::__construct();
        $this->twilio = $twilio;
    }

    public function execute(): MessageInstance
    {
        return $this->twilio->messages->create(
            $this->to,
            [
                'from' => $this->from,
                'body' => $this->message
            ]
        );
    }
}