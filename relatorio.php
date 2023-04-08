<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorios\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorios\{ZipArquivoExportado, XmlArquivoExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;


$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoArquivoExportado = new ZipArquivoExportado('orcamento');

echo $orcamentoArquivoExportado->salvar($orcamentoExportado);

$pedido = new Pedido();
$pedido->nomeCliente = 'Marcelo Alves';
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoArquivoExportado = new XmlArquivoExportado('pedido');
echo $pedidoArquivoExportado->salvar($pedidoExportado);
