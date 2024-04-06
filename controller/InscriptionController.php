<?php

class InscriptionController
{
    private array $inscription = [];

    public function __construct() {
        $this->inscription = [];
    }

    public function registerInscription(Inscription $inscription) : void {
        $this->inscription[] = $inscription;
    }
    public function cancelInscription(BeneficiaryStudent $student, Event $event) : bool{
        foreach ($this->inscription as $key => $inscription) {
            if ($inscription->getStudent() === $student && $inscription->getEvent() === $event) {
                unset($this->inscriptions[$key]);
                return true;
            }
        }
        return false;
    }
    public function listInscription(Event $event) : array {
        $matchingInscriptions = [];

        foreach ($this->inscription as $inscription) {
            if ($inscription->getEvent() === $event) {
                $matchingInscriptions[] = $inscription;
            }
        }
        return $matchingInscriptions;
    }

    public function viewInscriptions() : string {
        if (empty($this->inscription)) {
            return "Não há inscrições registradas.";
        }

        $inscriptionDetails = "";

        foreach ($this->inscription as $inscription) {
            print_r($inscription);
        }
        return $inscriptionDetails;
    }
    public function findInscriptionsByStudentId(int $studentId) : array {
        $matchingInscriptions = [];

        foreach ($this->inscription as $inscription) {
            if ($inscription->getStudent()->getId() === $studentId) {
                $matchingInscriptions[] = $inscription;
            }
        }
        return $matchingInscriptions;
    }
}