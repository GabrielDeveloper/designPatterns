<?php

namespace App;

class Conta
{
    protected $saldo;

    private function save()
    {
        return true;
    }
    public function depositar($valor)
    {
        $this->saldo += $valor;
        $this->save();
        return $this;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        $this->save();
        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
