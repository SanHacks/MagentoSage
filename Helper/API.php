<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Sage\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\StreamInterface;

class API
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function generateImages($prompt, $n, $size): StreamInterface
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
