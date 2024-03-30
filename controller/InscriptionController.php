<?php

class InscriptionController
{
    private $inscription = [];

    public function __construct()
    {
        $this->inscription = [];
    }

    public function registerInscription(Inscription $inscription)
    {
        $this->inscription[] = $inscription;
    }
    public function cancelInscription($student, $event)
    {
        foreach ($this->inscription as $key => $inscription) {
            if ($inscription->getStudent() === $student && $inscription->getEvent() === $event) {
                unset($this->inscriptions[$key]);
                return true;
            }
        }
        return false;
    }
    public function listInscription($event)
    {
        $matchingInscriptions = [];

        foreach ($this->inscription as $inscription) {
            if ($inscription->getEvent() === $event) {
                $matchingInscriptions[] = $inscription;
            }
        }
        return $matchingInscriptions;
    }

    public function viewInscriptions()
    {
        if (empty($this->inscriptions)) {
            return "Não há inscrições registradas.";
        }

        $inscriptionDetails = "";

        foreach ($this->inscription as $inscription) {
            $student = $inscription->getStudent();
            $event = $inscription->getEvent();
            $status = $inscription->getStatus();

            $inscriptionDetails .= "Aluno: " . $student->getName() . ", Evento: " . $event->getName() . ", Status: " . $status . "\n";
        }
        return $inscriptionDetails;
    }
}