<?php

namespace Chisu\PhpIntegration\Repositories;

use Chisu\PhpIntegration\Actions\Auth\Authorization;
use Chisu\PhpIntegration\Actions\PermohonanLab\mikroskopis;
use GuzzleHttp\Exception\GuzzleException;
use Chisu\PhpIntegration\Contracts\RoutesInterface;
use League\OAuth2\Client\Provider\GenericProvider;

class Routes implements RoutesInterface
{
    protected $baseUrl = 'https://mediator-satusehat.kemkes.go.id/api-dev';
    protected $baseMediatorUrl = 'https://mediator-satusehat.kemkes.go.id/api-dev';
    protected $authUrl = 'https://api-satusehat-stg.dto.kemkes.go.id/oauth2/v1';

    /**
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function authorization(array $data, array $headers = []): array
    {
        $url = "{$this->authUrl}/accesstoken?grant_type=client_credentials";

        return (new Authorization($url, $data))
            ->handle();
    }

    /**
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function mikroskopis(array $data, array $headers = []): array
    {
        $url = "{$this->baseMediatorUrl}/satusehat/rme/v1.0/sync";

        return (new mikroskopis($url, $data))
            ->handle();
    }

    /**
     * @param array $data
     * @param array $headers
     * @return array
     * @throws GuzzleException
     */
    public function tcm(array $data, array $headers = []): array
    {
        $url = "{$this->baseMediatorUrl}/satusehat/rme/v1.0/sync";

        return (new mikroskopis($url, $data))
            ->handle();
    }
}