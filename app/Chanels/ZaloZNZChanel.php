<?php
namespace App\Channels;

use Illuminate\Notifications\Notification;
use App\Services\ZaloZNSService;

class ZaloZNSChannel
{
    protected $zaloService;

    public function __construct(ZaloZNSService $zaloService)
    {
        $this->zaloService = $zaloService;
    }

    public function send($notifiable, Notification $notification)
    {
        $templateId = $notification->toZaloZNS($notifiable)->templateId;
        $data = $notification->toZaloZNS($notifiable)->data;

        $userId = $notifiable->zalo_user_id;

        return $this->zaloService->sendTemplateMessage($userId, $templateId, $data);
    }
}
