<?php
namespace App\Channels;

use Illuminate\Notifications\Notification;
use App\Services\ZaloOAService;

class ZaloOAChannel
{
    protected $zaloService;

    public function __construct(ZaloOAService $zaloService)
    {
        $this->zaloService = $zaloService;
    }

    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toZaloOA($notifiable);

        if (is_string($message)) {
            $message = ['text' => $message];
        }

        $userId = $notifiable->zalo_user_id;

        return $this->zaloService->sendMessage($userId, $message);
    }
}
