<?php

namespace App\Test\Solid;

use \PHPUnit_Framework_TestCase;
use App\Solid\OpenClose\ImportaVendas;
use App\Solid\OpenClose\LayoutA;

class OpenCloseTest extends PHPUnit_Framework_TestCase
{

    public function testImportSalesWithSuccessOfLayoutAForReportProductConsolidate()
    {
        $linha[] = "1;789123456;true;10;789123456;10;";
        $linha[] = "1;789654321;false;null;789123456;10;";
        $linha[] = "1;789654321;false;null;789123456;15;";
        
        $layoutA = new LayoutA();
        $layoutA->getLinha($linha);
        $layoutA->loja = 12345;
        
        $venda = new ImportaVendas;
        $venda->import($layoutA);

        $this->assertEquals($venda->cadastrados->attributes['valor'], 10);
        $this->assertEquals($venda->naoCadastrados->attributes['valor'], 25);
        $this->assertTrue($venda->error == null);
    }

    public function testImportSalesWithErrorOfLayoutAForReportProductConsolidate()
    {
        $linha[] = "1;789123456;true;10;789123456;10;";
        $linha[] = "1;789456123;true;10;789456123;10;true";
        $linha[] = "1;789654321;false;null;789123456;10;";
        $linha[] = "1;789654321;false;null;789123456;15;";
        $linha[] = "1;123456;false;null;123456;15;true";
        
        $layoutA = new LayoutA();
        $layoutA->getLinha($linha);
        $layoutA->loja = 12345;
        
        $venda = new ImportaVendas();
        $venda->import($layoutA);

        $this->assertEquals($venda->cadastrados->attributes['valor'], 10);
        $this->assertEquals($venda->naoCadastrados->attributes['valor'], 25);
        $this->assertTrue(count($venda->error) > 0);

    }

}
