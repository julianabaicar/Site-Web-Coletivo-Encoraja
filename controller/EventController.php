<?php

class EventController
{
    private $events = [];

    public function __construct(Event $events = null)
    {
        $this->events = $events;
    }
    public function registerEvent(Event $event): void
    {
        $this->events[] = $event;
    }

    public function deleteEvent($id)
    {
        if ($event = $this->getEventById($id)) {
            unset($this->events[array_search($event, $this->events, true)]);
            return true;
        }
        return false;
    }

    public function editEvent($id, Event $new_event)
    {
        if (isset($this->events[$id])) {
            $existing_event = $this->events[$id];
    
            $existing_event->setName($new_event->getName() ?? $existing_event->getName());
            $existing_event->setDescription($new_event->getDescription() ?? $existing_event->getDescription());
            $existing_event->setDate($new_event->getDate() ?? $existing_event->getDate());
            $existing_event->setTime($new_event->getTime() ?? $existing_event->getTime());
            $existing_event->setLocation($new_event->getLocation() ?? $existing_event->getLocation());
            $existing_event->setModality($new_event->getModality() ?? $existing_event->getModality());
            $existing_event->setStatus($new_event->getStatus() ?? $existing_event->getStatus());
            $existing_event->setType($new_event->getType() ?? $existing_event->getType());
            $existing_event->setTargetAudience($new_event->getTargetAudience() ?? $existing_event->getTargetAudience());
            $existing_event->setVacancies($new_event->getVacancies() ?? $existing_event->getVacancies());
            $existing_event->setSocialVacancies($new_event->getSocialVacancies() ?? $existing_event->getSocialVacancies());
            $existing_event->setRegularVacancies($new_event->getRegularVacancies() ?? $existing_event->getRegularVacancies());
            $existing_event->setMaterial($new_event->getMaterial() ?? $existing_event->getMaterial());
            $existing_event->setInterestArea($new_event->getInterestArea() ?? $existing_event->getInterestArea());
    
            $this->events[$id] = $existing_event;
            return true;
        }
        return false;
    }

    public function listEvents()
    {
        foreach ($this->events as $event) {
            echo "ID: " . $event->getId() . PHP_EOL;
            echo "Name: " . $event->getName() . PHP_EOL;
            echo "Description: " . $event->getDescription() . PHP_EOL;
            echo "Date: " . $event->getDate() . PHP_EOL;
            echo "Time: " . $event->getTime() . PHP_EOL;
            echo "Location: " . $event->getLocation() . PHP_EOL;
            echo "Modality: " . $event->getModality() . PHP_EOL;
            echo "Status: " . $event->getStatus() . PHP_EOL;
            echo "Type: " . $event->getType() . PHP_EOL;
            echo "Target Audience: " . $event->getTargetAudience() . PHP_EOL;
            echo "Vacancies: " . $event->getVacancies() . PHP_EOL;
            echo "Social Vacancies: " . $event->getSocialVacancies() . PHP_EOL;
            echo "Regular Vacancies: " . $event->getRegularVacancies() . PHP_EOL;
            echo "Material: " . $event->getMaterial() . PHP_EOL;
            echo "Interest Area: " . $event->getInterestArea() . PHP_EOL;
            echo PHP_EOL;
        }
    }
    function getEventById($id): Event|null
    {
        foreach ($this->events as $event) {
            if ($event->getId() === $id) {
                return $event;
            }
        }
        return null;
    }
}
