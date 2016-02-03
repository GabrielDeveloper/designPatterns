<?php

namespace App\Solid\OpenClose;

class LayoutA
{
    public $itensVenda;

    public function getLinha($linhas)
    {
        foreach ($linhas as $linha) {
            $this->processaVenda($linha);
        }
    }

    private function processaVenda($linha)
    {
        $linha = explode(";", $linha);

        $this->itensVenda[$linha[0]]['cadastrado']  = ($linha[1] == "true") ? true : false;
        $this->itensVenda[$linha[0]]['produto_id']  = $linha[2];
        $this->itensVenda[$linha[0]]['ean'] = $linha[3];
        $this->itensVenda[$linha[0]]['valor'] += $linha[4];
        $this->itensVenda[$linha[0]]['error'] = ($linha[5] == "true") ? true : false;
    }
}
