<?php

namespace Chisu\PhpIntegration\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Chisu\PhpIntegration\Contracts\HttpClientInterface;

class HttpClient implements HttpClientInterface
{
    protected Client $client;
    protected string $bearerToken;

    public function __construct()
    {
        $this->bearerToken = chisuConfig()
                ->getConfig('token');
        $this->client = new Client();
    }

    /**
     * @param string $url
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function get(string $url, array $headers = []): array
    {
        return $this->request('GET', $url, [], $headers);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function post(string $url, array $data = [], array $headers = []): array
    {
        return $this->request('POST', $url, $data, $headers);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function put(string $url, array $data = [], array $headers = []): array
    {
        return $this->request('PUT', $url, $data, $headers);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function patch(string $url, array $data = [], array $headers = []): array
    {
        return $this->request('PATCH', $url, $data, $headers);
    }

    /**
     * @param string $url
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function delete(string $url, array $headers = []): array
    {
        return $this->request('DELETE', $url, [], $headers);
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    protected function request(string $method, string $url, array $data = [], array $headers = []): array
    {
        try {
            $options = ['form_params' => $data];
            $options['headers'] = $headers;
            $options['headers']['Authorization'] = 'Bearer ' . $this->bearerToken;

            $response = $this->client->request($method, $url, $options);

            $body = json_decode($response->getBody()->getContents(), true);

            return [
                'status' => $response->getStatusCode(),
                'body' => $body
            ];
        } catch (RequestException $e) {
            return [
                'status' => $e->getResponse() ? $e->getResponse()->getStatusCode() : 500,
                'error' => $e->getMessage(),
            ];
        }
    }
}