<?php

declare(strict_types=1);

class Filme {
    private string $nome = 'Nome padrão';
    private int $anoLancamento = 2024;
    private string $genero = 'ação';
    private array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }

    /**
     * Método setter, para que possamos alterar o ano de lançamento
     */
    public function defineAnoLancamento(int $anoLancamento): void
    {
        $this->anoLancamento = $anoLancamento;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function defineNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function genero(): string
    {
        return $this->genero;
    }

    public function defineGenero(string $genero): void
    {
        $this->genero = $genero;
    }
}
