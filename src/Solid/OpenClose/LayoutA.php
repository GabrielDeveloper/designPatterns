<?php

namespace App\Solid\OpenClose;

class LayoutA implements LayoutInterface
{
    private $itensVenda;
    private $itensCompra;

    public function getItensVenda()
    {
        return $this->itensVenda;
    }

    public function getItensCompra()
    {
        return $this->itensCompra;
    }

    public function getLinha($linhas)
    {
        foreach ($linhas as $linha) {
            if(substr($linha, 0, 1)  == 1){
                $this->processaVenda($linha);
            } else if (substr($linha, 0, 1)  == 2) {
                $this->processaCompra($linha);
            }
        }
    }

    private function processaVenda($linha)
    {
        $linha = explode(";", $linha);

        $this->itensVenda[$linha[1]]['cadastrado']  = ($linha[2] == "true") ? true : false;
        $this->itensVenda[$linha[1]]['produto_id']  = $linha[3];
        $this->itensVenda[$linha[1]]['ean'] = $linha[4];
        $this->itensVenda[$linha[1]]['valor'] += $linha[5];
        $this->itensVenda[$linha[1]]['error'] = ($linha[6] == "true") ? true : false;
    }

    public function processaCompra($linha)
    {
        $linha = explode(";", $linha);

        $this->itensCompra[$linha[1]]['cadastrado']  = ($linha[2] == "true") ? true : false;
        $this->itensCompra[$linha[1]]['produto_id']  = $linha[3];
        $this->itensCompra[$linha[1]]['ean'] = $linha[4];
        $this->itensCompra[$linha[1]]['valor'] += $linha[5];
        $this->itensCompra[$linha[1]]['error'] = ($linha[6] == "true") ? true : false;
    }
}
