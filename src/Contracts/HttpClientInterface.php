<?php

namespace Chisu\PhpIntegration\Contracts;

interface HttpClientInterface
{
    public function get(string $url, array $headers = []): array;
    public function post(string $url, array $data = [], array $headers = []): array;
    public function put(string $url, array $data = [], array $headers = []): array;
    public function patch(string $url, array $data = [], array $headers = []): array;
    public function delete(string $url, array $headers = []): array;
}