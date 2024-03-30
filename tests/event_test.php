<?php

require_once("../class/Event.php");
require_once("../controller/EventController.php");

$event1 = new Event();
$event1->setId(3);
$event1->setName('Curso de Costura');
$event1->setDescription('Curso para aprender a costurar');
$event1->setDate('07/09/2002');
$event1->setTime('10:30:00');
$event1->setLocation('Passeio Publico');
$event1->setModality(EventModality::PRESENTIAL);
$event1->setStatus(EventStatus::ACTIVE);
$event1->setType(EventType::COURSE);
$event1->setTargetAudience('Mulheres');
$event1->setVacancies(15);
$event1->setSocialVacancies(4);
$event1->setRegularVacancies(11);
$event1->setMaterial('Tesouras');
$event1->setInterestArea('Costura');

$event2 = new Event();
$event2->setId(2);
$event2->setName('Workshop de Pintura');
$event2->setDescription('Workshop para aprender técnicas de pintura');
$event2->setDate('10/09/2002');
$event2->setTime('14:00:00');
$event2->setLocation('Museu de Arte Moderna');
$event2->setModality(EventModality::PRESENTIAL);
$event2->setStatus(EventStatus::ACTIVE);
$event2->setType(EventType::WORKSHOP);
$event2->setTargetAudience('Artistas iniciantes');
$event2->setVacancies(20);
$event2->setSocialVacancies(5);
$event2->setRegularVacancies(15);
$event2->setMaterial('Tintas e pincéis');
$event2->setInterestArea('Artes Plásticas');

$event3 = new Event();
$event3->setId(1);
$event3->setName('Palestra sobre Sustentabilidade');
$event3->setDescription('Palestra sobre práticas sustentáveis para preservar o meio ambiente');
$event3->setDate('15/09/2002');
$event3->setTime('19:00:00');
$event3->setLocation('Centro de Convenções');
$event3->setModality(EventModality::PRESENTIAL);
$event3->setStatus(EventStatus::ACTIVE);
$event3->setType(EventType::LECTURE);
$event3->setTargetAudience('Interessados em sustentabilidade');
$event3->setVacancies(50);
$event3->setSocialVacancies(10);
$event3->setRegularVacancies(40);
$event3->setMaterial('Nenhum');
$event3->setInterestArea('Sustentabilidade');


$event_controller = new EventController();
$event_controller->registerEvent($event1);
$event_controller->registerEvent($event2);
$event_controller->registerEvent($event3);
$event_controller->listEvents();

echo '=========================================================';

$event_controller->deleteEvent($event1->getId());
$event_controller->listEvents();

echo '=========================================================';

$new_event = new Event('Evento 2 (Editado)', 'Descrição do Evento 2 (Editado)', '2024-04-02', '11:00:00', 'Local 2 (Editado)', EventModality::HYBRID, EventStatus::PENDING, EventType::WORKSHOP, 'Público 2 (Editado)', 35, 12, 23, 'Material 2 (Editado)', 'Interesse 2 (Editado)');
$event_controller->editEvent(2, $new_event);
$event_controller->listEvents();

echo '=========================================================';







