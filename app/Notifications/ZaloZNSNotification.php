<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use App\Services\ZaloZNSService;

class ZaloZNSNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $templateId;
    protected $data;

    public function __construct($templateId, $data)
    {
        $this->templateId = $templateId;
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['zaloZNS'];
    }

    public function toZaloZNS($notifiable)
    {
        $zaloService = new ZaloZNSService();
        $userId = $notifiable->zalo_user_id; // Assuming the user model has a `zalo_user_id` field

        return $zaloService->sendTemplateMessage($userId, $this->templateId, $this->data);
    }
}
