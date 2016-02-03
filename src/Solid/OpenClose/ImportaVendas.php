<?php

namespace App\Solid\OpenClose;

class ImportaVendas implements Importation
{

    public function setConfig(Array $config)
    {
        foreach ($config as $key => $value) {
            $this->$key = $value;
        }
    }

    public function import($itens)
    {
        foreach ($itens as $iten) {
            $cadastrado = array_shift($iten);
            if ($cadastrado) {
                $this->saveProdutosCadastrados($iten);
                continue;
            }
            $this->saveProdutosNaoCadastrados($iten);
        }
    }

    public function saveProdutosCadastrados($itens)
    {
        unset($itens['ean']);

        if ($itens['error'] != false) {
            $this->error[] =  $itens['produto_id'];
            return false;
        }

        $vendasProduto = new \StdClass();
        $vendasProduto->attributes = $itens;
        $this->cadastrados = $vendasProduto;
    }

    public function saveProdutosNaoCadastrados($itens)
    {
        unset($itens['produto_id']);

        if ($itens['error'] != false) {
            $this->error[] = $itens['ean'];
            return false;
        }
        $vendasProdutoNaoCadastrado = new \StdClass();
        $vendasProdutoNaoCadastrado->attributes = $itens;
        $this->naoCadastrados = $vendasProdutoNaoCadastrado;
    }

}
