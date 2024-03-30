<?php
    require '.\class\User.php';

    class ONGBeneficiaryStudent Extends User implements Interface_user 
    {
        public int $id;
        public bool $beneficiary;
    
        public function __construct(int $id, bool $beneficiary)
        {
            $this->id = $id;
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