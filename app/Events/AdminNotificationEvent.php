<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdminNotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $admin;
    public $payload;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
        $this->payload = ['html' => view('admin.__partials.notif', ['authUser' => $admin])->render()];

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('admin_notification.' . $this->admin->id);
    }

    public function broadcastWith()
    {
        return $this->payload;
    }
}
