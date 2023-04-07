<?php

namespace Lumis\Userprofile\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Lumis\Userprofile\Events\PasswordUpdated;
use Lumis\Userprofile\Notifications\PasswordNotification;
use StaffConfig;

class SendPasswordNotification implements ShouldQueue
{


    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(PasswordUpdated $event)
    {
        $shouldNotify = (bool)StaffConfig::get('send_notification');

        if ($shouldNotify) {
            Notification::route('mail', $event->user->email)->notify(
                new PasswordNotification($event->user, $event->password)
            );
        }
    }
}
