<?php

declare(strict_types=1);

enum Genero: string {
    case Acao = 'Ação';
    case Comedia = 'Comédia';
    case Terror = 'Terror';
    case SuperHeroi = 'Super herói';
    case Drama = 'Drama';
    case NaoDefinido = 'Gênero não definido';
}