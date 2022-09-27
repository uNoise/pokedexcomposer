<?php

require_once 'vendor/autoload.php';

$poke = new \composer\pokedex\poke();

$poke->cadastrar ('pikachu', '1',15);

$tipo = new \composer\pokedex\tipo();

$tipo->cadastrar('Eletrico', 'Lutador', 'Pequeno');

$status = new \composer\pokedex\status();

$status->cadastrar ('24','Pokemon do tipo rato, filha da puta');

$saida = new \composer\pokedex\saida();

$saida->cadastrar ($poke, $status, $tipo);

echo $saida ->imprimir();







