<?php

declare(strict_types=1);

class Filme extends Titulo {
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoMinutos
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function duracaoMinutos(): int
    {
        return $this->duracaoMinutos;
    }
}
