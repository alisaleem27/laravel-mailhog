<?php

namespace AliSaleem\MailHog\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use AliSaleem\MailHog\MailHogServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            MailHogServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
