<?php
require_once '../class/Voluntary.php';
require_once '../class/Address.php';

$voluntario = array();

$voluntario[0] = new Voluntary(123456789, "Andre", 123456, "1990-01-01", 123456, "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');
$voluntario[1] = new Voluntary(123456789, "Maria", 123456, "1990-01-01", 123456, "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');
$voluntario[2] = new Voluntary(123456789, "Juliana", 123456, "1990-01-01", 123456, "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');

//Cenario 01: Criar endereço
$endereco = array();
$endereco[0] = new Address();
$endereco[1] = new Address();
$endereco[2] = new Address();

$endereco[0]->registerAddress("Rua Eva Pereira Correia", 133, "Sitio Cercado", "Curitiba", 81910045, $voluntario[0]);
$endereco[1]->registerAddress("Rua das Graças", 133, "Portão", "Curitiba", 81910045, $voluntario[1]);
$endereco[2]->registerAddress("Rua Derosso", 133, "Boqueirão", "Curitiba", 81910045, $voluntario[2]);

if($endereco){
    print_r($endereco);
    echo 'Sucesso! Teste Cenario 01' .PHP_EOL;
} else {
    echo  'Erro: teste Cenario 01' .PHP_EOL;
}

//Cenario 02: Editar endereço
$endereco[0]->changeAddress("Rua Derosso", 133, "Boqueirão", "Curitiba", 81910045, $voluntario[0]);
print_r($endereco[0]);

echo 'Endereço alterado com sucesso';


