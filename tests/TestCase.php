<?php

namespace Tests;

use Grosv\LaravelTwilio\TwilioServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        if (!File::exists(__DIR__.'/credentials')) {
            dd('Please provide Twilio credentials per the instructions in README');
        }
        $credentials = explode("\n", File::get(__DIR__.'/credentials'));
        Config::set('twilio.sid', $credentials[0]);
        Config::set('twilio.token', $credentials[1]);
        Config::set('twilio.default_from', $credentials[2]);
        Config::set('twilio.sandbox_to', $credentials[3]);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    protected function getPackageProviders($app)
    {
        return [TwilioServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('app.key', 'base64:r0w0xC+mYYqjbZhHZ3uk1oH63VadA3RKrMW52OlIDzI=');
    }
}