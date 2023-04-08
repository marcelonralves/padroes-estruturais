<?php

namespace Alura\DesignPattern\Http;

class GuzzleHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        echo "guzzle";
    }
}