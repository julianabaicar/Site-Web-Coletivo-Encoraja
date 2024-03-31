<?php

require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");
require_once("../class/BeneficiaryStudent.php");

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

$student1 = new BeneficiaryStudent(
    1, 
    "João",
    "senha123", 
    "1990-05-15", 
    "123.456.789-00", 
    "beneficiário", 
    true,
    true,
    "joao@example.com",
    true
);
$student2 = new BeneficiaryStudent(
    3, 
    "Maria",
    "senha123", 
    "1990-05-15", 
    "123.456.789-00", 
    "beneficiário", 
    true,
    true,
    "joao@example.com",
    true
);

//testantando a criação de inscrição
$inscription1 = new Inscription($event1, $student1);
$inscription1->setStatus("Ativa");
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
$inscription2 = new Inscription($event1, $student2);
$inscriptionController->registerInscription($inscription2);

$inscricoesEvento1 = $inscriptionController->listInscription($event1);
echo "Inscrições para o Evento 2:\n";
foreach ($inscricoesEvento1 as $inscricao) {
    echo "- Aluno: " . $inscricao->getStudent()->getName() . ", Status: " . $inscricao->getStatus() . "\n";
}

print_r($inscriptionController->findInscriptionsByStudentId(50));

// Testando a visualização de todas as inscrições
echo "Todas as inscrições:\n";
echo $inscriptionController->viewInscriptions();
echo 'terminou';