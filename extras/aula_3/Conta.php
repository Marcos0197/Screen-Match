<?php

declare(strict_types=1);

class Conta
{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly TipoConta $tipo,
    ) {
        $this->saldoEmCentavos = 0;
    }

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            throw new DomainException('Impossível realizar o depósito');
        }

        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar < 0 || $valorASacar >
        $this->saldoEmCentavos) {
            throw new DomainException('Impossível realizar o saque');
        }

        $this->saldoEmCentavos -= $valorASacar;
    }
}
