<?php

abstract class EventModality {
    const PRESENTIAL = 'presential';
    const HYBRID = 'hybrid';
    const REMOTE = 'remote';
}

abstract class EventType {
    const COURSE = 'course';
    const WORKSHOP = 'workshop';
    const LECTURE = 'lecture';
}

abstract class EventStatus {
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    const PENDING = 'pending';
}

class Event {
    private $id;
    private $name;
    private $description;
    private $date;
    private $time;
    private $location;
    private $modality;
    private $status;
    private $type;
    private $target_audience;
    private $vacancies;
    private $social_vacancies;
    private $regular_vacancies;
    private $material;
    private $interest_area;    

    public function __construct(
        $id = null, $name = null, $description = null, $date = null, $time = null, $location = null, $modality = null, 
        $status = null, $type = null, $target_audience = null, $vacancies = null, $social_vacancies = null, 
        $regular_vacancies = null, $material = null, $interest_area = null) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
        $this->time = $time;
        $this->location = $location;
        $this->modality = $modality;
        $this->status = $status;
        $this->type = $type;
        $this->target_audience = $target_audience;
        $this->vacancies = $vacancies;
        $this->social_vacancies = $social_vacancies;
        $this->regular_vacancies = $regular_vacancies;
        $this->material = $material;
        $this->interest_area = $interest_area;
    }

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getDate() {
        return $this->date;
    }
    public function getTime() {
        return $this->time;
    }
    public function getLocation() {
        return $this->location;
    }
    public function getModality() {
        return $this->modality;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getType() {
        return $this->type;
    }
    public function getTargetAudience() {
        return $this->target_audience;
    }
    public function getVacancies() {
        return $this->vacancies;
    }
    public function getSocialVacancies() {
        return $this->social_vacancies;
    }
    public function getRegularVacancies() {
        return $this->regular_vacancies;
    }
    public function getMaterial() {
        return $this->material;
    }
    public function getInterestArea() {
        return $this->interest_area;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setDate($date) {
        $this->date = $date;
    }
    public function setTime($time) {
        $this->time = $time;
    }
    public function setLocation($location) {
        $this->location = $location;
    }
    public function setModality($modality) {
        $this->modality = $modality;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
    public function setType($type) {
        $this->type = $type;
    }
    public function setTargetAudience($target_audience) {
        $this->target_audience = $target_audience;
    }
    public function setVacancies($vacancies) {
        $this->vacancies = $vacancies;
    }
    public function setSocialVacancies($social_vacancies) {
        $this->social_vacancies = $social_vacancies;
    }
    public function setRegularVacancies($regular_vacancies) {
        $this->regular_vacancies = $regular_vacancies;
    }
    public function setMaterial($material) {
        $this->material = $material;
    }
    public function setInterestArea($interest_area) {
        $this->interest_area = $interest_area;
    }
}