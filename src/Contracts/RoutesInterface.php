<?php

namespace Chisu\PhpIntegration\Contracts;

interface RoutesInterface
{
    public function authorization(array $data, array $headers = []): array;

}