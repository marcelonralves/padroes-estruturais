<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;
use DomainException;

class RegistrarOrcamento
{
    public function __construct(private readonly HttpAdapter $adapter)
    {
    }

    public function registrar(Orcamento $orcamento): void
    {
        if(!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException('Ops! Esse orçamento ainda não foi finalizado');
        }

        $this->adapter->post('http://orcamento.url', [
            'valorOrcamento' => $orcamento->valor,
            'qtdItems' => $orcamento->quantidadeItens
        ]);
    }
}