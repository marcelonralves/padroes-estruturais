<?php

namespace Alura\DesignPattern\Relatorios;

class XmlArquivoExportado implements ArquivoExportado
{
    public function __construct(private readonly string $nomeElementoPai)
    {
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");
        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->saveXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}