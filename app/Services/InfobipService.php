<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Infobip\Api\SendEmailApi;
use Infobip\Configuration;

class InfobipService
{
    protected $client;

    protected $config;

    public function __construct()
    {
        $this->client = new Client();
        $this->config = config('services.infobip');
    }

    /**
     * @return Configuration
     */
    private function setConfig(): Configuration
    {
        return (new Configuration())
            ->setHost($this->config['url'])
            ->setApiKeyPrefix('Authorization', $this->config['api_key_prefix'])
            ->setApiKey('Authorization', $this->config['api_key']);

    }


    public function sendEmail(array $request)
    {
        $sendEmailApi = new SendEmailApi($this->client, $this->setConfig());
        $request = array_merge($request, $request['message'][0]);
        unset($request['message']);
        dump($request);
        try {
            return $sendEmailApi->sendEmail($request);
        } catch (\Exception | \Throwable $ex) {
            Log::error("Error: " . $ex->getMessage());
        }

    }
}
