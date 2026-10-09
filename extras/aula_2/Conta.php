<?php

declare(strict_types=1);
class Conta
{
    private int $saldoCentavos;
    private string $nomeTitular;
    private int $numeroConta;

    public function depositar(int $valorDeposito): void
    {
        if ($valorDeposito <= 0) {
            throw new DomainException('Impossível realizar o depósito');
        }

        if ($valorDeposito > 0) {
            $this->saldoCentavos += $valorDeposito;
        }
    }

    public function sacar(int $valorSaque): void
    {
        if ($valorSaque < 0 || $valorSaque >
        $this->saldoCentavos) {
            throw new DomainException('Impossível realizar o saque');
        }

        $this->saldoCentavos -= $valorSaque;
    }

    public function getSaldoCentavos(): int
    {
        return $this->saldoCentavos;
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

    public function getNumeroConta(): int
    {
        return $this->numeroConta;
    }
}
