<?php

namespace Lumis\Userprofile\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Lumis\StaffManagement\Entities\Staff;

class PasswordUpdated
{
    use Dispatchable, SerializesModels;

    /**
     *
     * @var Staff
     */
    public User $user;

    /**
     * @var string
     */
    public string $password;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
