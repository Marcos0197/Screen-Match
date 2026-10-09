<?php

declare(strict_types=1);

class Conta
{
    private int $saldoCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly TipoConta $tipo,
    ) {
        $this->saldoCentavos = 0;
    }

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
}
