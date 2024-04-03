<?php

    require_once("../class/Inscription.php");
    require_once("../controller/InscriptionController.php");
    require_once("../class/BeneficiaryStudent.php");
    require_once("../class/Voluntary.php");
    require_once("../class/Administrator.php");
    require_once("../class/User.php");

//Passar parâmetros direto
    $user1 = new User
    (
        1,
        "name User1",
        "emailuser1@gmail.com",
        "31/03/2000",
        "567.876.197-9",
        "456*kimtest",
        true,
        true,
        true
    );
    echo '-------------------------------------------'.PHP_EOL;
    print_r($user1);


    $user2 = new User
    (
        2,
        "name User2",
        "emailuser2@gmail.com",
        "31/03/2000",
        "567.876.197-0",
        "789*kimtest",
        true,
        true,
        true

    );
    echo '-------------------------------------------'.PHP_EOL;
    print_r($user2);

//Passar parametros pela classe de usuario Beneficiario
    $beneficiary_student1 = new BeneficiaryStudent
    (
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
    echo '-------------------------------------------'.PHP_EOL;
    print_r($beneficiary_student1);


//Passar parametros pela classe de usuario Administrador
    $administrator = new Administrator
    (
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
    echo '-------------------------------------------'.PHP_EOL;
    print_r($administrator);

//Passar parametros pela classe de usuario Voluntario
    
    $voluntary = new Voluntary
    (
        123456789, 
        "Andre", 
        123456, 
        "1990-01-01", 
        123456, 
        "Voluntario", 
        true, 
        true, 
        true, 
        'Finais de semana', 
        'Bastante', 
        'Amigos', 
        'altas'
    );
    echo '-------------------------------------------'.PHP_EOL;
    print_r($voluntary);

