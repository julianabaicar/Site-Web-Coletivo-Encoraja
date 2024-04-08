<?php
require_once '../class/Voluntary.php';
require_once '../class/Address.php';

$voluntario = new Voluntary(id: 123456789, name: "Andre", password: 123456, date_of_birth: "1990-01-01", cpf: 123456, user_type: "Voluntario", image_term: true, data_use_term: true, email:true, availability: 'Finais de semana', course_experience: 'Bastante', how_did_know: 'Amigos',expectations:  'altas');
print_r($voluntario);

//Cenario 01: Criar endereço
$endereco = new Address();

$endereco->registerAddress(number: 133, zip_code: 123456, street: "Eva Pereira Correia", city: "Curitiba", neighborhoods: "sitio cercado");

$endereco->changeAddress(number: 144, zip_code: 123456, street: "Eva Pereira Correia", city: "Curitiba", neighborhoods: "sitio cercado");
print_r($endereco);
//if($endereco){
//    print_r($endereco);
//    echo 'Sucesso! Teste Cenario 01' .PHP_EOL;
//} else {
//    echo  'Erro: teste Cenario 01' .PHP_EOL;
//}

////Cenario 02: Editar endereço
//$endereco[0]->changeAddress("Rua Derosso", 133, "Boqueirão", "Curitiba", 81910045, $voluntario[0]);
//print_r($endereco[0]);
//
//echo 'Endereço alterado com sucesso';
