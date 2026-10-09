<?php

declare(strict_types=1);

class ContaBancaria
{
    protected int $saldo;

    public function depositar(int $valorDeposito): void
    {
        if ($valorDeposito <= 0) {
            throw new DomainException('Impossível realizar o depósito');
        }

        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
        }
    }

    public function sacar(int $valorSaque): void
    {
        if ($valorSaque < 0 || $valorSaque >
        $this->saldo) {
            throw new DomainException('Impossível realizar o saque');
        }

        $this->saldo -= $valorSaque;
    }

    public function consultarSaldo(): float
        {
            return $this->saldo;
        }
}

class ContaCorrente extends ContaBancaria
{
    // 0.5%
    private const float TAXA_SAQUE = 0.005;
    // R$ 5,00
    private const float TARIFA_MENSAL = 5_00;

    public function cobrarTarifaMensal(): void
    {
        $this->saldo -= self::TARIFA_MENSAL;
    }

    #[Override]
    public function sacar(int $valorSaque): void
    {
        $saqueTotal = $valorSaque + $valorSaque * self::TAXA_SAQUE;

        if ($saqueTotal < 0 || $saqueTotal >
        $this->saldo) {
            throw new DomainException('Impossível realizar o saque');
        }

        $this->saldo -= $valorSaque;
    }
}
