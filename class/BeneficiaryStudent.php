<?php
    require '../class/User.php';

    class BeneficiaryStudent Extends User implements Interface_user 
    {
        public int $id;
        public bool $beneficiary;
    
        // public function __construct(int $id = null, bool $beneficiary = null)
        // {
        //     $this->id = $id;
        //     $this->beneficiary = $beneficiary;
        // }
        public function __construct(int $id = null, string $name = null, string $password = null, string $date_of_birth = null, string $cpf = null, string $user_type = null, bool $image_term = null, bool $data_use_term = null, string $email = null, bool $beneficiary = null)
        {
            parent::__construct($id, $name, $password, $date_of_birth, $cpf, $user_type, $image_term, $data_use_term, $email);
            $this->beneficiary = $beneficiary;
        }
    

        public function RegisterUser(){}
        public function EventList(){}


        public function ChooseEvento()
        {
            
        }

        public function RegisterEvent()
        {
            
        }

        public function SendEvent()
        {

        }

        public function ListEvents()
        {

        }
    }