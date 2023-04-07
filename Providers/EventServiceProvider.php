<?php

namespace Lumis\Userprofile\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Lumis\Userprofile\Events\PasswordUpdated;
use Lumis\Userprofile\Listeners\SendPasswordNotification;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [

        PasswordUpdated::class => [
            SendPasswordNotification::class,
        ],
    ];
}
