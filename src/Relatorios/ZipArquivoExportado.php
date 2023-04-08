<?php

namespace Alura\DesignPattern\Relatorios;

class ZipArquivoExportado implements ArquivoExportado
{
    public function __construct(private readonly string $nomeInterno)
    {
    }

    function salvar(ConteudoExportado $conteudoExportado): string
    {
        $arquivoZip = new \ZipArchive();
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeInterno, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}