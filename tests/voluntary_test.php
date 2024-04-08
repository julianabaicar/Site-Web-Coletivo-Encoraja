<?php
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Voluntary.php");
//enum
require_once("../enum/EventModality.php");
require_once("../enum/EventStatus.php");
require_once("../enum/EventType.php");

//Cenario: Criar usuário

$voluntario = new Voluntary(id: 123456789, name: "Andre", password: 123456, date_of_birth: "1990-01-01", cpf: 123456, user_type: "Voluntario", image_term: true, data_use_term: true, email:true, availability: 'Finais de semana', course_experience: 'Bastante', how_did_know: 'Amigos',expectations:  'altas');

if($voluntario){
    print_r($voluntario);
    echo 'Sucesso ao criar usuário!' .PHP_EOL;
} else {
    echo  'Erro ao tentar criar usuário' .PHP_EOL;
}

$event2 = new Event();
$event2->setId(2);
$event2->setName('Workshop de Pintura');
$event2->setDescription('Workshop para aprender técnicas de pintura');
$event2->setDate('10/09/2002');
$event2->setTime('14:00:00');
$event2->setLocation('Museu de Arte Moderna');
$event2->setModality(EventModality::PRESENTIAL);
$event2->setStatus(EventStatus::PENDING);
$event2->setType(EventType::WORKSHOP);
$event2->setTargetAudience('Artistas iniciantes');
$event2->setVacancies(20);
$event2->setSocialVacancies(5);
$event2->setRegularVacancies(15);
$event2->setMaterial('Tintas e pincéis');
$event2->setInterestArea('Artes Plásticas');

//Cenario: Sugerir evento
$voluntario->suggestEvent($event2);
