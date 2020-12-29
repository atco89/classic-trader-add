<?php
declare(strict_types=1);

namespace App\Modules\GuzzelClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use stdClass;

/**
 * Class HttpClient
 * @package App\Modules\GuzzelClient
 */
final class HttpClient
{

    /**
     * @var Client
     */
    protected Client $client;

    /**
     * HttpClient constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param string $url
     * @return stdClass
     * @throws GuzzleException
     */
    public function run(string $url): stdClass
    {
        $content = $this->client->get($url)->getBody()->__toString();
        return json_decode($content);
    }
}