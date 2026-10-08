<?php

class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new DomainException('Valor de depósito 0');
        }

        $this->saldoEmCentavos += $valorADepositar;
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar < 0 || $valorASacar >=
        $this->saldoEmCentavos) {
            throw new DomainException('Impossível realizar o saque');
        }

        $this->saldoEmCentavos -= $valorASacar;
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
