<?php

class Administrator extends User implements Interface_user
{
    private $id;

    public function __construct($id = null, $name = null, $password = null, $date_of_birth = null, $cpf = null, $user_type = null, $image_term = null, $data_use_term = null, $email = null)
    {
        parent::__construct($id, $name, $password, $date_of_birth, $cpf, $user_type, $image_term, $data_use_term, $email);
        $this->id = $id;
    }
    public function acceptEvent(Event $event)
    {
        $event->setStatus(EventStatus::ACTIVE);

        $events = new EventController();
        $events->editEvent($event->getId(), $event);
    }

    public function rejectEvent(Event $event)
    {
        $event->setStatus(EventStatus::INACTIVE);

        $events = new EventController();
        $events->editEvent($event->getId(), $event);
    }

    public function createEvent(array $data)
    {
        $event = new Event();
        $controller = new EventController;

        $event->setId($data['id']); // resto dos atributos
        $controller->registerEvent($event);
    }
    public function editEvent(int $id, array $data)
    {
        $newEvent = new Event();
        $newEvent->setName($data['name']);

        $events = new EventController();
        $events->editEvent($id, $newEvent);
    }
    public function eventList()
    {
        $event = new EventController();
        $event->listEvents();
    }

    // MÉTODOS QUE ESPERAREMOS O BANCO, MAS FUNCIONARIAM COMO O CONTROLLER DE EVENT OU INSCRIPTION
    // public function registerUser()
    // {
    // }
    // public function deleteUser()
    // {
    // }
    // public function editUser()
    // {
    // }
    // public function viewReport()
    // {
    //     //GERAÇÃO DE RELATÓRIO
    // }
    public function viewInscriptions()
    {
        $inscription = new InscriptionController();
        $inscription->viewInscriptions();
    }
    public function acceptInscriptions(Inscription $inscription)
    {
        $inscription->setStatus(EventStatus::ACTIVE);
    }
    public function rejectInscriptions(Inscription $inscription)
    {
        $inscription->setStatus(EventStatus::INACTIVE);
    }
}