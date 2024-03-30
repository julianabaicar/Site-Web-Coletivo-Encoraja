<?php

class Administrator extends User
{
    private $id;

    public function __construct($id = null, $name = null, $password = null, $email = null, $birthday = null, $type = null, $image_agreement = null, $data_agreement = null)
    {
        parent::__construct($id, $name, $password, $email, $birthday, $type, $image_agreement, $data_agreement);
        $this->id = $id;
    }
    public function acceptEvent($idEvent)
    {
        $newEvent = new Event();
        $newEvent->setStatus(EventStatus::ACTIVE);

        $events = new EventController();
        $events->editEvent($idEvent, $newEvent);
    }
    public function rejectEvent($idEvent)
    {
        $newEvent = new Event();
        $newEvent->setStatus(EventStatus::INACTIVE);

        $events = new EventController();
        $events->editEvent($idEvent, $newEvent);
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
    public function registerUser()
    {
    }
    public function deleteUser()
    {
    }
    public function editUser()
    {
    }
    // public function viewReport(){}
    public function viewInscriptions()
    {
        $inscription = new InscriptionController();
        $inscription->viewInscriptions();
    }
    public function acceptInscriptions(Event $event)
    {
    }
    public function rejectInscriptions()
    {
    }
}