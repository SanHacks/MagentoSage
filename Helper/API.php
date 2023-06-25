<?php

namespace Gundo\Sage\Helper;

use GuzzleHttp\Exception\GuzzleException;
use Magento\Framework\App\Helper\AbstractHelper;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class API
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function generateImages($prompt, $n, $size): \Psr\Http\Message\StreamInterface
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer {{token}}' // Replace {{token}} with your actual token
        ];

        $body = json_encode([
            'prompt' => $prompt,
            'n' => $n,
            'size' => $size
        ]);

        $request = new Request('POST', 'https://api.openai.com/v1/images/generations', $headers, $body);
        $response = $this->client->send($request);

        return $response->getBody();
    }
}
