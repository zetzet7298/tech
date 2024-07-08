<?php
namespace App\Services;

use GuzzleHttp\Client;

class ZaloZNSService
{
    protected $client;
    protected $accessToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->accessToken = env('ZALO_ZNS_ACCESS_TOKEN'); // Store your ZNS access token in the .env file
    }

    public function sendTemplateMessage($userId, $templateId, $data)
    {
        $url = 'https://openapi.zalo.me/v2.0/oa/message/template';
        $params = [
            'access_token' => $this->accessToken,
            'data' => json_encode([
                'recipient' => [
                    'user_id' => $userId,
                ],
                'template_id' => $templateId,
                'template_data' => $data,
            ]),
        ];

        $response = $this->client->post($url, ['json' => $params]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
