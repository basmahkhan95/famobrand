<?php

namespace App\Listeners;

use App\Events\AdminNotificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AdminNotificationEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AdminNotificationEvent  $event
     * @return void
     */
    public function handle(AdminNotificationEvent $event)
    {
        //
    }
}
