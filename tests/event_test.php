<?php

require_once("../class/Event.php");
require_once("../controller/EventController.php");


require_once("../enum/EventModality.php");
require_once("../enum/EventStatus.php");
require_once("../enum/EventType.php");


// print_r(EventModality::Presential);
// die();
// Criando eventos
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
$event1 = new Event($data_event1);

$data_event2 = array(
    'id' => 2,
    'name' => 'Curso de pintura',
    'description' => 'Curso para aprender a pintar',
    'date' => '2024-04-29',
    'time' => '15:00',
    'location' => 'Passeio público',
    'modality' => EventModality::Presential,
    'status' => EventStatus::Inactive,
    'type' => EventType::Course,
    'target_audience' => 'Mulheres',
    'vacancies' => 10,
    'social_vacancies' => 3,
    'regular_vacancies' => 7,
    'material' => 'Tinta e pincel',
    'interest_area' => 'Artes'
);
$event2 = new Event($data_event2);

$data_event3 = array(
    'id' => 3,
    'name' => 'Palestra sobre Sustentabilidade',
    'description' => 'Palestra sobre práticas sustentáveis para preservar o meio ambiente',
    'date' => '2024-04-29',
    'time' => '19:00',
    'location' => 'Passeio público',
    'modality' => EventModality::Presential,
    'status' => EventStatus::Inactive,
    'type' => EventType::Lecture,
    'target_audience' => 'Mulheres',
    'vacancies' => 10,
    'social_vacancies' => 3,
    'regular_vacancies' => 7,
    'material' => 'Nenhum',
    'interest_area' => 'Sustentabilidade'
);
$event3 = new Event($data_event3);


// Guardando os eventos na lista de eventos
$event_controller = new EventController();
$event_controller->registerEvent($event1);
$event_controller->registerEvent($event2);
$event_controller->registerEvent($event3);

// Listando eventos
$event_controller->listEvents();

echo '=========================================================';

// Deletando um evento da lista de eventos
$event_controller->deleteEvent($event1->getId());
$event_controller->listEvents();

echo '=========================================================';

$data_event4 = array(
    'id' => null,
    'name' => null,
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

// Editando evento, passando um novo para substituir
$new_event = new Event($data_event4);
$event_controller->editEvent(2, $new_event);
$event_controller->listEvents();
