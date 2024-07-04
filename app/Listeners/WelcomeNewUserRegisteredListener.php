<?php

namespace App\Listeners;

use App\Jobs\SendMailJob;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewUserRegisteredListener
{
   
    public function handle(Registered $event): void
    {
        SendMailJob::dispatch($event->user);
    }
}
