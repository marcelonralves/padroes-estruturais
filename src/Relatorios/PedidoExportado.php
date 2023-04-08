<?php

namespace Alura\DesignPattern\Relatorios;

use Alura\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado
{
    public function __construct(private readonly Pedido $pedido)
    {
    }

    public function conteudo(): array
    {
        return [
            'nome_cliente' => $this->pedido->nomeCliente,
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y')
        ];
    }
}