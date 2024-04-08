<?php
require_once "User.php";

class Administrator extends User implements Interface_user
{
    private int | null $id;

    public function __construct(array $data_adm) {
        parent::__construct($data_adm['id'], $data_adm['name'], $data_adm['password'], $data_adm['cpf'], $data_adm['user_type'], $data_adm['email']);
        $this->id = $data_adm['id'];
    }
    public function acceptEvent(Event $event) : void{
        $event->setStatus(EventStatus::Active);

        $events = new EventController();
        $events->editEvent($event->getId(), $event);
    }

    public function rejectEvent(Event $event) : void {
        $event->setStatus(EventStatus::Inactive);

        $events = new EventController();
        $events->editEvent($event->getId(), $event);
    }

    public function createEvent(Event $suggest_event) : void {
        $events = new EventController();
        $events->registerEvent($suggest_event);
    }
    public function editEvent(int $id, array $new_event_data) : void{
        $newEvent = new Event($new_event_data);
        // $newEvent->setName($data['name']);

        $events = new EventController();
        $events->editEvent($id, $newEvent);
    }
    public function eventList(): void{
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
    public function viewInscriptions() : void {
        $inscription = new InscriptionController();
        $inscription->viewInscriptions();
    }
    public function acceptInscriptions(Inscription $inscription) : void {
        $inscription->setStatus(EventStatus::Active);
    }
    public function rejectInscriptions(Inscription $inscription) : void {
        $inscription->setStatus(EventStatus::Inactive);
    }
}