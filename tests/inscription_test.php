<?php

require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");
require_once("../class/BeneficiaryStudent.php");

require_once("../enum/EventModality.php");
require_once("../enum/EventStatus.php");
require_once("../enum/EventType.php");

// Criando novo evento
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


// Criando alunos
$student1 = array (
    'id'=> '1',
    'name'=> 'student1',
    'email'=>'student1@gmail.com',
    'password'=>'studentpassword1',
    'cpf'=> '125435315',
    'user_type'=> 'BeneficiaryStudent'
);  
$student1 = new BeneficiaryStudent($student1); 

$student2 = array(
    'id'=> '1',
    'name'=> 'student1',
    'email'=>'student1@gmail.com',
    'password'=>'studentpassword1',
    'cpf'=> '125435315',
    'user_type'=> 'BeneficiaryStudent'
);  
$student2 = new BeneficiaryStudent($student2); 

// Testantando a criação de inscrição
$inscription1 = new Inscription($event1, $student1);
$inscription1->setStatus(EventStatus::Active);
$inscription1->setProof("Prova de inscrição 1");
print_r($inscription1);

echo '-------------------------------------------'.PHP_EOL;

// Criando o controlador de inscrições e registrando as inscrições
$inscriptionController = new InscriptionController();
$inscriptionController->registerInscription($inscription1);
print_r($inscriptionController);



// Testando o cancelamento de uma inscrição
$cancelado = $inscriptionController->cancelInscription($student1, $event1);
if ($cancelado) {
    echo "Inscrição de Aluno 1 para o Evento 1 cancelada com sucesso.\n";
} else {
    echo "Falha ao cancelar inscrição de Aluno 1 para o Evento 1.\n";
}

// Testando a listagem de inscrições para um evento
// Criando inscrição e guardando na lista
$inscription2 = new Inscription($event1, $student2);
$inscriptionController->registerInscription($inscription2);



//Filtrando pelo evento desejado e mostrando
$inscricoesEvento1 = $inscriptionController->listInscription($event1);
echo "Inscrições para o Evento 2:\n";
foreach ($inscricoesEvento1 as $inscricao) {
    print_r($inscricao);
}
print_r($inscriptionController->findInscriptionsByStudentId(3));


// Testando a visualização de todas as inscrições
echo "Todas as inscrições:\n";
print_r($inscriptionController->viewInscriptions());