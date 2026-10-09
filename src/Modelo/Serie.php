<?php

declare(strict_types=1);

class Serie extends Titulo {
    private array $notas;

    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public int $temporadas,
        public int $episodiosTemporada,
        public int $minutosEpisodio
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }
}
