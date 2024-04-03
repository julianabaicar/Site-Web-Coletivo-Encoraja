<?php
require_once "Event.php";
require_once "User.php";
class Voluntary extends User implements Interface_user
{
    private int $id;
    private string $availability, $course_experience, $how_did_know, $expectations;

    public function __construct($id, $name, $password, $date_of_birth, $cpf, $user_type, $image_term, $data_use_term, $email, string $availability, string $course_experience, string $how_did_know, string $expectations)
    {
        parent::__construct($id, $name, $password, $date_of_birth, $cpf, $user_type, $image_term, $data_use_term, $email);
        $this->availability = $availability;
        $this->course_experience = $course_experience;
        $this->how_did_know = $how_did_know;
        $this->expectations = $expectations;
    }


    public function suggestEvent($suggest_event)
    {
        $event = new EventController();
        $event->registerEvent($suggest_event);

    }
    public function viewInscription()
    {

    }

    public function getAvailability(): string
    {
        return $this->availability;
    }

    public function setAvailability(string $availability): void
    {
        $this->availability = $availability;
    }

    public function getCourseExperience(): string
    {
        return $this->course_experience;
    }

    public function setCourseExperience(string $course_experience): void
    {
        $this->course_experience = $course_experience;
    }

    public function getHowDidKnow(): string
    {
        return $this->how_did_know;
    }

    public function setHowDidKnow(string $how_did_know): void
    {
        $this->how_did_know = $how_did_know;
    }

    public function getExpectations(): string
    {
        return $this->expectations;
    }

    public function setExpectations(string $expectations): void
    {
        $this->expectations = $expectations;
    }
}
