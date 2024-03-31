<?php
require '../class/User.php';

class BeneficiaryStudent extends User implements Interface_user
{
    public int $id;
    public bool $beneficiary;

    public function __construct(int $id = null, string $name = null, string $password = null, string $date_of_birth = null, string $cpf = null, string $user_type = null, bool $image_term = null, bool $data_use_term = null, string $email = null, bool $beneficiary = null)
    {
        parent::__construct($id, $name, $password, $date_of_birth, $cpf, $user_type, $image_term, $data_use_term, $email);
        $this->beneficiary = $beneficiary;
    }

    public function eventList()
    {
        //eventos deveriam ser filtrados status ativo
        $event_controller = new eventController();
        $event_controller->listEvents();
    }

    //tiramos a metodo escolher e enviar evento, tirar do diagrama

    public function inscribeEvent(Event $event)
    {
        $inscription = new Inscription($event, $this);
        $inscription_controller = new InscriptionController();
        $inscription_controller->registerInscription($inscription);
    }

    public function listEventsUser()
    {
        $inscription_controller = new InscriptionController();
        $inscription_controller->findInscriptionsByStudentId($this->id);
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}