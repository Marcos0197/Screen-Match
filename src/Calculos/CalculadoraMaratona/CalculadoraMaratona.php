<?php

declare(strict_types=1);

class CalculadoraMaratona {
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoMinutos();
    }

    public function duracaoHoras(): float
    {
        return $this->duracaoMaratona/60;
    }
}