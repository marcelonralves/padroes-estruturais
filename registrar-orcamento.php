<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\GuzzleHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistrarOrcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();

$orcamento->quantidadeItens = 5;
$orcamento->valor = 200;
$orcamento->aprova();
$orcamento->finaliza();

$registrarOrcamento = new RegistrarOrcamento(new CurlHttpAdapter());
$registrarOrcamento->registrar($orcamento);