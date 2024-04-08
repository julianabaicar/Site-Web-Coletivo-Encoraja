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
        0,
        "name User1",
        "emailuser1@gmail.com",
        "31/03/2000",
        "567.876.197-9",
        "456*kimtest",
    );
    echo '-------------------------------------------'.PHP_EOL;
    print_r($user1);


    $user2 = new User
    (
        1,
        "name User2",
        "emailuser2@gmail.com",
        "31/03/2000",
        "567.876.197-0",
        "789*kimtest",
    );
    echo '-------------------------------------------'.PHP_EOL;
    print_r($user2);

//Passar parametros pela classe de usuario Beneficiario

    $beneficiary_student1 = array 
    (
        'id'=> '1',
        'name'=> 'student1',
        'email'=>'student1@gmail.com',
        'password'=>'studentpassword1',
        'cpf'=> '125435315',
        'user_type'=> 'BeneficiaryStudent'
    );  
    $beneficiary_student1 = new BeneficiaryStudent($beneficiary_student1); 
    echo '-------------------------------------------'.PHP_EOL;
    print_r($beneficiary_student1);


//Passar parametros pela classe de usuario Administrador
    $administrator = array 
    (
        'id'=> '1',
        'name'=> 'adm1',
        'email'=>'adm1@gmail.com',
        'password'=>'admpassword1',
        'cpf'=> '456987523',
        'user_type'=> 'Administrator'
    );  
    $administrator = new Administrator($administrator); 
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
        'Finais de semana', 
        'Bastante', 
        'Amigos', 
        'altas'
    );
    echo '-------------------------------------------'.PHP_EOL;
    print_r($voluntary);

