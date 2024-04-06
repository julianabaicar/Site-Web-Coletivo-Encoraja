<?php

class Inscription  {
    private Event $event;
    private BeneficiaryStudent $student;
    private  EventStatus | null $status;
    private string | null $proof; //caminho do arquivo

    public function __construct(Event $event, BeneficiaryStudent $student){
        $this->event = $event;
        $this->student = $student;
    }

    public function getEvent() : Event  {
        return $this->event;
    }
    public function setEvent(Event $event) : void {
        $this->event = $event;
    }
    public function getStudent() : BeneficiaryStudent {
        return $this->student;
    }
    public function setStudent(BeneficiaryStudent $student) : void {
        $this->student = $student;
    }
    public function getProof() : string | null {
        return $this->proof;
    }
    public function setProof(string $proof) : void {
        $this->proof = $proof;
    }
    public function getStatus() : EventStatus | null {
        return $this->status;
    }
    public function setStatus(EventStatus $status) : void {
        $this->status = $status;
    }
}
