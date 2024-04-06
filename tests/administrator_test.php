<?php

require_once("../class/Administrator.php");
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");
require_once("../class/BeneficiaryStudent.php");

//Enum
require_once("../enum/EventModality.php");
require_once("../enum/EventStatus.php");
require_once("../enum/EventType.php");


// Criando um administrador
$administrator = array(
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

$administrator = new Administrator($administrator);

// Criando um evento
$data_event1 = array(
    'id' => 1,
    'name' => 'Curso de costura',
    'description' => 'Curso para aprender a costurar',
    'date' => '2024-04-05',
    'time' => '10:00',
    'location' => 'Passeio público',
    'modality' => EventModality::Presential,
    'status' => EventStatus::Active,
    'type' => EventType::Workshop,
    'target_audience' => 'Mulheres',
    'vacancies' => 100,
    'social_vacancies' => 20,
    'regular_vacancies' => 80,
    'material' => 'Tesoura e agulha',
    'interest_area' => 'Costura e bordado'
);
$event = new Event($data_event1);

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
$data_event2 = array(
    'id' => 10,
    'name' => 'Curso de informártica',
    'description' => null,
    'date' => null,
    'time' => null,
    'location' => 'Unicesumar',
    'modality' => null,
    'status' => null,
    'type' => null,
    'target_audience' => null,
    'vacancies' => null,
    'social_vacancies' => null,
    'regular_vacancies' => null,
    'material' => null,
    'interest_area' => null
);


$newEvent = new Event($data_event2);
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
