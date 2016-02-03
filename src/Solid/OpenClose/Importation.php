<?php

namespace App\Solid\OpenClose;

interface Importation
{
    public function import(LayoutInterface $itens);
    public function saveProdutosCadastrados($itens);
    public function saveProdutosNaoCadastrados($itens);    
}
