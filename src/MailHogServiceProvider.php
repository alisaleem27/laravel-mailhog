<?php

namespace AliSaleem\MailHog;

use Illuminate\Support\ServiceProvider;

class MailHogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $mailHogConfig = require __DIR__.'/../config/mailhog.php';

        config()->set('mail.mailers.mailhog', $mailHogConfig);
    }
}
