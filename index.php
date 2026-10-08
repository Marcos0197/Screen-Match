<?php

require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/funcoes.php';

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme                = new Filme();
$filme->defineNome('Thor - Ragnarok');
$filme->defineAnoLancamento(2021);
$filme->defineGenero('super-heroi');

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento() . "\n";

