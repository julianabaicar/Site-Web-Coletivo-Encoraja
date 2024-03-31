<?php
require_once "Event.php";
class Voluntary extends User
{
    private int $id;
    private string $availability, $course_experience, $how_did_know, $expectations;

    public function __construct(int $cpf = null, int $password = null, string $name = null, string $email= null, string $ft_nasc= null, string $type= null, bool $term_image= null, bool $term_data= null, string $availability= null, string $course_experience= null, string $how_did_know= null, string $expectations= null)
    {
        parent::__construct($cpf, $password, $name, $email, $ft_nasc, $type, $term_image, $term_data);
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
