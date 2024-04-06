<?php

class EventController
{
    private array $events = [];

    public function __construct(Event $events = null) {
        $this->events = $events ?? [];
    }
    public function registerEvent(Event $event): void {
        $this->events[] = $event;
    }

    public function deleteEvent(int $id) : bool {
        if ($event = $this->getEventById($id)) {
            unset($this->events[array_search($event, $this->events, true)]);
            return true;
        }
        return false;
    }

    public function editEvent(int $id, Event $new_event): bool {
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
    public function listEvents() : void {
        foreach ($this->events as $event) {
            print_r($event);
            echo PHP_EOL;
        }
    }
    function getEventById(int $id) : Event | null {
        foreach ($this->events as $event) {
            if ($event->getId() === $id) {
                return $event;
            }
        }
        return null;
    }
}
