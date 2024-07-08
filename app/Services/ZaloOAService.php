<?php
namespace App\Services;

use GuzzleHttp\Client;

class ZaloOAService
{
    protected $client;
    protected $accessToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->accessToken = env('ZALO_OA_ACCESS_TOKEN'); // Store your OA access token in the .env file
    }

    public function sendMessage($userId, $message)
    {
        $url = 'https://openapi.zalo.me/v2.0/oa/message';
        $params = [
            'access_token' => $this->accessToken,
            'data' => json_encode([
                'recipient' => [
                    'user_id' => $userId,
                ],
                'message' => [
                    'text' => $message,
                ],
            ]),
        ];

        $response = $this->client->post($url, ['json' => $params]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
