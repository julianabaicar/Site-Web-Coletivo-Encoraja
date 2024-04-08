<?php
    require_once("..\class\Event.php");
    require_once("..\class\Inscription.php");
    require_once("..\class\BeneficiaryStudent.php");
    require_once("..\controller\EventController.php");
    require_once("..\controller\InscriptionController.php");

    //Enum
    require_once("../enum/EventModality.php");
    require_once("../enum/EventStatus.php");
    require_once("../enum/EventType.php");


//Cenário 1 - CADASTRO DE ALUNO
    // Criando Alunos - 'Beneficiary Student' - com todos os campos preenchidos
    $beneficiary1 = array 
    (
        'id'=> '1',
        'name'=> 'student1',
        'email'=>'student1@gmail.com',
        'password'=>'studentpassword1',
        'cpf'=> '125435315',
        'user_type'=> 'BeneficiaryStudent'
    );  
    $beneficiary1 = new BeneficiaryStudent($beneficiary1); 

//LISTA DE EVENTOS

    // Cadastra eventos para teste
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
    $event = new Event($data_event2);
    
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
    $event = new Event($data_event3);

    //lista eventos
       $list_event2 = array
       (
           'id'=> '1',
           'name'=> 'student1',
           'email'=>'student1@gmail.com',
           'password'=>'studentpassword1',
           'cpf'=> '125435315',
           'user_type'=> 'BeneficiaryStudent'
       );
       $list_event2= new BeneficiaryStudent($list_event2);
       $list_event2-> eventList();
       print_r($list_event2);

    echo '-------------------------------------------'.PHP_EOL;

//INSCRIÇÃO EM EVENTO
   // Inscrição de Aluno em Evento cadastrado
   $inscription1 = new Inscription($event, $beneficiary1);
   //$inscription1->setStatus($status);
   $inscription1->setProof("Prova de inscrição 1");
   print_r($inscription1);

   echo '-------------------------------------------'.PHP_EOL;

   // Criando o controlador de inscrições e registrando as inscrições
   $inscriptionController = new InscriptionController();
   $inscriptionController->registerInscription($inscription1);
   print_r($inscriptionController);


// LISTAR EVENTOS EM QUE O ALUNO SE INSCREVEU

$inscriptions_beneficiary_student = new InscriptionController();
$inscriptions_beneficiary_student->findInscriptionsByStudentId('1');
print_r($inscriptions_beneficiary_student);
