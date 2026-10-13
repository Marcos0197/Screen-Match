<?php

require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/funcoes.php';

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme         = "Top Gun - Maverick";
$anoLancamento     = 2022;
$notas             = [];
$quantidadeDeNotas = $argc - 1;

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme       = array_sum($notas) / $quantidadeDeNotas;
$planoPrime      = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => Genero::Acao,
    "Thor: Ragnarok"     => Genero::SuperHeroi,
    "Se beber não case"  => Genero::Comedia,
    default              => Genero::NaoDefinido
};
echo "O gênero do filme é: {$genero->value}\n";

$filme = criaFilme(
    nota: 7.8,
    genero: Genero::SuperHeroi,
    anoLancamento: 2021,
    nome: "Thor: Ragnarok",
    duracao: 180
);
echo $filme->anoLancamento;

sort($notas);
$menorNota = min($notas);

$posicaoDoisPontos = strpos($filme->nome, ':');
$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
