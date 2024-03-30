<?php

    class User implements Interface_user
    {
        private int $id;
        private string $name;
        private string $email;
        private string $date_of_birth;
        private string $cpf;
        private string $password;
        private string $user_type;
        private bool $image_term;
        private bool $data_use_term;
        //nao tem endereco alterar isso no diagrama

        //add uma classe com um array como o exemplo da aula
        public function __construct($id=null, $name=null, $password=null, $date_of_birth=null, $cpf=null, $user_type=null, $image_term=null, $data_use_term=null, $email=null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->password = $password;
            $this->date_of_birth = $date_of_birth;
            $this->cpf = $cpf;
            $this->user_type = $user_type;
            $this->image_term = $image_term;
            $this->data_use_term = $data_use_term;
            $this->email = $email;
        }

        public function RegisterUser(){}
        public function EventList(){}

        public function getId(): int
        {
            return $this->id;
        }
        
        public function getName(): string
        {
            return $this->name;
        }
        
        public function getEmail(): string
        {
            return $this->email;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }
        
        public function setEmail(string $email): void
        {
            $this->email = $email;
        }
    }
