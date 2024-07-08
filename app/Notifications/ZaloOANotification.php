<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use App\Services\ZaloOAService;

class ZaloOANotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['zaloOA'];
    }

    public function toZaloOA($notifiable)
    {
        $zaloService = new ZaloOAService();
        $userId = $notifiable->zalo_user_id; // Assuming the user model has a `zalo_user_id` field

        return $zaloService->sendMessage($userId, $this->message);
    }
}
