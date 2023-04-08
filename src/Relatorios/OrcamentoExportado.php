<?php

namespace Alura\DesignPattern\Relatorios;

use Alura\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    public function __construct(private readonly Orcamento $orcamento)
    {
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidade_itens' => $this->orcamento->quantidadeItens
        ];
    }
}