<?php

require_once("../class/User.php");
require_once("../class/Administrator.php");
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");

// $administrator = new Administrator(
//     1,               
//     "John Doe",         
//     "password123",      
//     "1990-01-01",
//     "12931623967",     
//     "admin",            
//     true,               
//     true,
//     "john@email.com"
// );


// $event1 = new Event();
// $event1->setId(3);
// $event1->setName('Curso de Costura');
// $event1->setDescription('Curso para aprender a costurar');
// $event1->setDate('07/09/2002');
// $event1->setTime('10:30:00');
// $event1->setLocation('Passeio Publico');
// $event1->setModality(EventModality::PRESENTIAL);
// $event1->setStatus(EventStatus::PENDING);
// $event1->setType(EventType::COURSE);
// $event1->setTargetAudience('Mulheres');
// $event1->setVacancies(15);
// $event1->setSocialVacancies(4);
// $event1->setRegularVacancies(11);
// $event1->setMaterial('Tesouras');
// $event1->setInterestArea('Costura');
// print_r($event1);

// // aceitando evento
// $event_controller = new EventController();
// $event_controller->registerEvent($event1);
// $administrator->acceptEvent($event1);

// // rejeitando evento
// $event_controller = new EventController();
// $event_controller->registerEvent($event1);
// $administrator->rejectEvent($event1);

// Criando um administrador
$administrator = new Administrator(
    1,
    "John Doe",
    "password123",
    "1990-01-01",
    "12931623967",
    "admin",
    true,
    true,
    "john@email.com"
);

// Testando a função de aceitar um evento
$event1 = new Event();
$event1->setId(1);
$event1->setName('Curso de Costura');
$event1->setDescription('Curso para aprender a costurar');
$event1->setDate('2024-03-31');
$event1->setTime('10:30:00');
$event1->setLocation('Passeio Publico');
$event1->setModality(EventModality::PRESENTIAL);
$event1->setStatus(EventStatus::PENDING);
$event1->setType(EventType::COURSE);
$event1->setTargetAudience('Mulheres');
$event1->setVacancies(15);
$event1->setSocialVacancies(4);
$event1->setRegularVacancies(11);
$event1->setMaterial('Tesouras');
$event1->setInterestArea('Costura');

$administrator->acceptEvent($event1);

// Testando a função de rejeitar um evento
$event2 = new Event();
$event2->setId(2);
$event2->setName('Palestra de Saúde Mental');
$event2->setDescription('Palestra sobre a importância da saúde mental');
$event2->setDate('2024-04-10');
$event2->setTime('14:00:00');
$event2->setLocation('Online');
$event2->setModality(EventModality::REMOTE);
$event2->setStatus(EventStatus::PENDING);
$event2->setType(EventType::LECTURE);
$event2->setTargetAudience('Público geral');
$event2->setVacancies(50);
$event2->setSocialVacancies(10);
$event2->setRegularVacancies(40);
$event2->setMaterial('Computador');
$event2->setInterestArea('Saúde');

$administrator->rejectEvent($event2);

// Testando a função de criar um evento
$newEventData = array(
    'id' => 3,
    'name' => 'Workshop de Marketing Digital',
    // Adicione os outros campos do evento aqui
);

$administrator->createEvent($newEventData);

// Testando a função de editar um evento
$administrator->editEvent(3, array('name' => 'Workshop de Marketing'));

// Testando a função de listar eventos
$administrator->eventList();

// Testando a função de visualizar inscrições
$administrator->viewInscriptions();

// Testando a função de aceitar inscrições
$inscription = new Inscription();
// Preencha os detalhes da inscrição aqui
$administrator->acceptInscriptions($inscription);

// Testando a função de rejeitar inscrições
$administrator->rejectInscriptions($inscription);