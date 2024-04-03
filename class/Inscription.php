<?php

class Inscription  {
    private Event $event;
    private BeneficiaryStudent $student;
    private $status;
    private $proof;

    public function __construct($event, $student){
        $this->event = $event;
        $this->student = $student;
    }

    public function getEvent(): Event
    {
        return $this->event;
    }
    public function setEvent(Event $event): void
    {
        $this->event = $event;
    }
    public function getStudent(): BeneficiaryStudent
    {
        return $this->student;
    }
    public function setStudent(BeneficiaryStudent $student): void
    {
        $this->student = $student;
    }
    public function getProof()
    {
        return $this->proof;
    }
    public function setProof($proof): void
    {
        $this->proof = $proof;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status): void
    {
        $this->status = $status;
    }
}
