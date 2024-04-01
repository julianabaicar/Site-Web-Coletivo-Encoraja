<?php

require_once("../class/Administrator.php");
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");
require_once("../class/BeneficiaryStudent.php");


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

// Criando uma inscrição com o aluno e o evento específicos
$inscription = new Inscription($event, $student);
print_r($inscription);

// Testando a função de aceitar inscrições
$administrator->acceptInscriptions($inscription);
print_r($inscription);


// Testando a função de rejeitar inscrições
$administrator->rejectInscriptions($inscription);
print_r($inscription);

// Criando um evento pelo perfil do administrador
$newEvent = new Event(10, 'Curso de informártica');
$administrator->createEvent($newEvent);
$administrator->eventList();// listaria se estivessem todos na mesma chamada
$administrator->viewInscriptions(); //funcionaria se tivesse eventos instanciados e guardando em algum lugar


// Aceitando inscrição
$inscription1 = new Inscription($event, $student);
$administrator->acceptInscriptions($inscription1);
print_r($inscription1);

// Rejeitando inscrição
$administrator->rejectInscriptions($inscription1);
print_r($inscription1);
