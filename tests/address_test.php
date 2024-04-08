<?php
require_once '../class/Voluntary.php';
require_once '../class/Address.php';

$voluntario = array(
    'id' => 1,
    'name' => 'John Doe',
    'password' => 'password123',
    'date_of_birth' => '1990-01-01',
    'cpf' => '12931623967',
    'user_type' => 'admin',
    'image_term' => true,
    'data_use_term' => true,
    'email' => 'john@email.com'
);

$voluntario = new Voluntary($voluntario);



//Cenario 01: Criar endereço
$endereco = new Address();

$endereco->registerAddress(number: 133, zip_code: 123456, street: "Eva Pereira Correia", city: "Curitiba", neighborhoods: "sitio cercado");

if($endereco){
    print_r($endereco);
    echo 'Sucesso! Teste Cenario 01' .PHP_EOL;
} else {
    echo  'Erro: teste Cenario 01' .PHP_EOL;
}

////Cenario 02: Editar endereço
$endereco->changeAddress(number: 144, zip_code: 123456, street: "Eva Pereira Correia", city: "Curitiba", neighborhoods: "sitio cercado");

print_r($endereco);



//Cenario 03: Atribuindo um endereço a um usuário
$voluntario->setAddress($endereco);
print_r($voluntario);
