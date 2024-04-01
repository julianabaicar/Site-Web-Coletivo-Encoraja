<?php
    require_once("..\class\Event.php");
    require_once("..\class\Inscription.php");
    require_once("..\class\BeneficiaryStudent.php");
    require_once("..\controller\EventController.php");
    require_once("..\controller\InscriptionController.php");


//Cenário 1 - CADASTRO DE ALUNO
    // Criando Alunos - 'Beneficiary Student' - com todos os campos preenchidos
    $beneficiary_student1 = new BeneficiaryStudent(
        0,
        "Nome Teste 1",
        "123*senhateste",
        "31/03/2000",
        "123.456.789-0",
        "Aluno",
        true,
        true,
        "nometeste1@gmail.com"
    );

    
   // Criando um Aluno - 'Beneficiary Student' - sem preencher os campos que não são obrigatórios
        //[...] a implementar

   // Criando um Aluno com dados inválidos - não preenchendo campos que não são obrigatórios
        //[...] a implementar

//LISTA DE EVENTOS

    // Cadastra eventos para teste

        $event = new Event(
            0,
            'Curso de Costura',
            'Curso para aprender a costurar',
            '2024-03-31',
            '10:30:00',
            'Passeio Publico',
            EventModality::PRESENTIAL,
            EventStatus::PENDING,
            EventStatus::PENDING,
            'Mulheres',
            15,
            4,
            11,
            'Tesouras',
            'Costura'
        );



   // Lista de Eventos
    $lista_evento= new BeneficiaryStudent(        
        0,
        "Nome Teste 1",
        "123*senhateste",
        "31/03/2000",
        "123.456.789-0",
        "Aluno",
        true,
        true,
        "nometeste1@gmail.com",
        true
    );
    $lista_evento-> eventList();
    print_r($event);

    echo '-------------------------------------------'.PHP_EOL;

//INSCRIÇÃO EM EVENTO
   // Inscrição de Aluno em Evento cadastrado
        $inscription1 = new Inscription($event, $beneficiary_student1);
        $inscription1->setStatus("Ativa");
        $inscription1->setProof("Prova de inscrição 1");
        print_r($inscription1);

        echo '-------------------------------------------'.PHP_EOL;

        // Criando o controlador de inscrições e registrando as inscrições
        $inscriptionController = new InscriptionController();
        $inscriptionController->registerInscription($inscription1);
        print_r($inscriptionController);

   // Inscrição de Aluno em Evento não cadastrado
        //[...] a implementar

// LISTAR EVENTOS EM QUE O ALUNO SE INSCREVEU

    $inscriptions_beneficiary_student = new InscriptionController();
    $inscriptions_beneficiary_student->findInscriptionsByStudentId('1');
    print_r($inscriptions_beneficiary_student);


