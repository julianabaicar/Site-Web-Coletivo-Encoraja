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

//Cenario: Sugerir evento
$voluntario->suggestEvent($event1);
