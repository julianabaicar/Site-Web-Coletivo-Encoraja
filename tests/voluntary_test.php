<?php
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Voluntary.php");

//Cenario: Criar usuário

$voluntario = new Voluntary(123456789, "Andre", 123456, "1990-01-01", 123456, "Voluntario", true, true, true, 'Finais de semana', 'Bastante', 'Amigos', 'altas');

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
