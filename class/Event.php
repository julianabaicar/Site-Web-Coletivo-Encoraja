<?php

class Event {
    private int | null $id;
    private string | null  $name;
    private string | null $description;
    private string | null  $date;
    private string | null  $time;
    private string | null  $location;
    private EventModality | null  $modality;
    private EventStatus | null  $status;
    private EventType | null $type;
    private string | null  $target_audience;
    private int | null  $vacancies;
    private int | null  $social_vacancies;
    private int | null  $regular_vacancies;
    private string | null  $material;
    private string | null  $interest_area;    

    public function __construct(array $data_event = null) {
        $this->setId($data_event['id']);
        $this->setName($data_event['name']);
        $this->setDescription($data_event['description']);
        $this->setDate($data_event['date']);
        $this->setTime($data_event['time']);
        $this->setLocation($data_event['location']);
        $this->setModality($data_event['modality']);
        $this->setStatus($data_event['status']);
        $this->setType($data_event['type']);
        $this->setTargetAudience($data_event['target_audience']);
        $this->setVacancies($data_event['vacancies']);
        $this->setSocialVacancies($data_event['social_vacancies']);
        $this->setRegularVacancies($data_event['regular_vacancies']);
        $this->setMaterial($data_event['material']);
        $this->setInterestArea($data_event['interest_area']);
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string  | null {
        return $this->name;
    }

    public function getDescription(): string  | null {
        return $this->description;
    }

    public function getDate(): string  | null {
        return $this->date;
    }

    public function getTime(): string  | null {
        return $this->time;
    }

    public function getLocation(): string  | null {
        return $this->location;
    }

    public function getModality(): EventModality  | null {
        return $this->modality;
    }

    public function getStatus(): EventStatus  | null {
        return $this->status;
    }

    public function getType(): EventType  | null {
        return $this->type;
    }

    public function getTargetAudience(): string  | null {
        return $this->target_audience;
    }

    public function getVacancies(): int  | null {
        return $this->vacancies;
    }

    public function getSocialVacancies(): int  | null {
        return $this->social_vacancies;
    }

    public function getRegularVacancies(): int  | null {
        return $this->regular_vacancies;
    }

    public function getMaterial(): string  | null {
        return $this->material;
    }

    public function getInterestArea(): string  | null {
        return $this->interest_area;
    }

    public function setId(int $id = null): void {
        $this->id = $id;
    }

    public function setName(string $name = null): void {
        $this->name = $name;
    }

    public function setDescription(string $description = null): void {
        $this->description = $description;
    }

    public function setDate(string $date = null): void {
        $this->date = $date;
    }

    public function setTime(string $time = null): void {
        $this->time = $time;
    }

    public function setLocation(string $location = null): void {
        $this->location = $location;
    }

    public function setModality(EventModality $modality = null): void {
        $this->modality = $modality;
    }

    public function setStatus(EventStatus $status = null): void {
        $this->status = $status;
    }

    public function setType(EventTYPE $type = null): void {
        $this->type = $type;
    }

    public function setTargetAudience(string $target_audience = null): void {
        $this->target_audience = $target_audience;
    }

    public function setVacancies(int $vacancies = null): void {
        $this->vacancies = $vacancies;
    }

    public function setSocialVacancies(int $social_vacancies = null): void {
        $this->social_vacancies = $social_vacancies;
    }

    public function setRegularVacancies(int $regular_vacancies = null): void {
        $this->regular_vacancies = $regular_vacancies;
    }

    public function setMaterial(string $material = null): void {
        $this->material = $material;
    }

    public function setInterestArea(string $interest_area = null): void {
        $this->interest_area = $interest_area;
    }
}
