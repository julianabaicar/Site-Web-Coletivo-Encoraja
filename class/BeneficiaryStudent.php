<?php
require_once '../class/User.php';

class BeneficiaryStudent extends User implements Interface_user
{
    public int $id;


    public function __construct(array $data_beneficiary) {
        parent::__construct($data_beneficiary['id'], $data_beneficiary['name'], $data_beneficiary['password'], $data_beneficiary['cpf'], $data_beneficiary['user_type'], $data_beneficiary['email']);
        $this->id = $data_beneficiary['id'];
    }

    public function eventList() : void
    {
        //eventos deveriam ser filtrados status ativo
        $event_controller = new eventController();
        $event_controller->listEvents();
    }

    //tiramos a metodo escolher e enviar evento, tirar do diagrama

    public function inscribeEvent(Event $event) : void
    {
        $inscription = new Inscription($event, $this);
        $inscription_controller = new InscriptionController();
        $inscription_controller->registerInscription($inscription);
    }

    public function listEventsUser() : void
    {
        $inscription_controller = new InscriptionController();
        $inscription_controller->findInscriptionsByStudentId($this->id);
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}