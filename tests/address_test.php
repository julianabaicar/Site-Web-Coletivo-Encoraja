<?php

require_once 'User.php';
require_once 'Address.php';

$voluntario = array();

$voluntario[0] = new Voluntary(123456789, 123456, "Andre", "andre@example.com", "1990-01-01", "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');
$voluntario[1] = new Voluntary(123456789, 123456, "Maria", "maria@example.com", "1990-01-01", "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');
$voluntario[2] = new Voluntary(123456789, 123456, "Juliana", "juliana@example.com", "1990-01-01", "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');

$endereco = array();
$endereco[0] = new Address();
$endereco[1] = new Address();
$endereco[2] = new Address();

$endereco[0]->registrerAddress("Rua Eva Pereira Correia", 133, "Sitio Cercado", "Curitiba", 81910045, $voluntario[0]);
$endereco[1]->registrerAddress("Rua das Graças", 133, "Portão", "Curitiba", 81910045, $voluntario[1]);
$endereco[2]->registrerAddress("Rua Derosso", 133, "Boqueirão", "Curitiba", 81910045, $voluntario[2]);

$endereco[0]->changeAddress("Rua Derosso", 133, "Boqueirão", "Curitiba", 81910045, $voluntario[0]);

print_r($endereco[0]);



