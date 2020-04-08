<?php

use Grosv\LaravelTwilio\Actions\SendSMS;
use Grosv\LaravelTwilio\Twilio;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
use Twilio\Rest\Client;

class SMSTest extends TestCase
{
    use WithFaker;
    private $twilio;

    public function setUp(): void
    {
        parent::setUp();
        $this->twilio = new Client(config('twilio.sid'), config('twilio.token'));
    }

    /** @test */
    public function it_can_send_a_message()
    {
        $this->assertInstanceOf(MessageInstance::class, (new Twilio())->sendSMS($this->faker->sentence, '+17732485577'));
    }

    /** @test */
    public function it_can_set_a_to_number()
    {
        $twilio = new SendSMS($this->twilio);

        $twilio->setFrom('+7732485577');

        $this->assertSame('+7732485577', $twilio->from);
    }
}