<?php

require_once("../class/User.php");
require_once("../class/Administrator.php");
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");
require_once("../class/BeneficiaryStudent.php");

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

// Criando um evento
$event = new Event();
$event->setId(1);
$event->setName('Curso de Costura');
$event->setDescription('Curso para aprender a costurar');
$event->setDate('2024-03-31');
$event->setTime('10:30:00');
$event->setLocation('Passeio Publico');
$event->setModality(EventModality::PRESENTIAL);
$event->setStatus(EventStatus::PENDING);
$event->setType(EventType::COURSE);
$event->setTargetAudience('Mulheres');
$event->setVacancies(15);
$event->setSocialVacancies(4);
$event->setRegularVacancies(11);
$event->setMaterial('Tesouras');
$event->setInterestArea('Costura');

// Criando um aluno
$student = new BeneficiaryStudent(1, 'Maria Silva');

// Adicione outros detalhes do aluno aqui

// Criando uma inscrição com o aluno e o evento específicos
$inscription = new Inscription($event, $student);

// Testando a função de aceitar inscrições
echo "Aceitando a inscrição:" . PHP_EOL;
$administrator->acceptInscriptions($inscription);
echo "Status da inscrição após aceitar: " . $inscription->getStatus() . PHP_EOL;

// Testando a função de rejeitar inscrições
echo "Rejeitando a inscrição:" . PHP_EOL;
$administrator->rejectInscriptions($inscription);
echo "Status da inscrição após rejeitar: " . $inscription->getStatus() . PHP_EOL;