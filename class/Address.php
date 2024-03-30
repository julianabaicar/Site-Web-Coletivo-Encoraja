<?php
require_once 'users.php';
class Address{
    private int $number, $zip_code;
    private string $street, $city,$neighborhoods;
    private User $user;

    public function registrerAddress(string $street, int $number, string $neighborhoods, string $city, int $zip_code, User $user)
    {
        $this->street = $street;
        $this->number = $number;
        $this->neighborhoods = $neighborhoods;
        $this->city = $city;
        $this->zip_code = $zip_code;
        $this->user = $user;
    }


    public function changeAddress(string $street, int $number, string $neighborhoods, string $city, int $zip_code, User $user)
    {
        $this->street = $street;
        $this->number = $number;
        $this->neighborhoods = $neighborhoods;
        $this->city = $city;
        $this->zip_code = $zip_code;
        $this->user = $user;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function getZipCode(): int
    {
        return $this->zip_code;
    }

    public function setZipCode(int $zip_code): void
    {
        $this->zip_code = $zip_code;
    }

    public function getNeighborhoods(): int
    {
        return $this->neighborhoods;
    }

    public function setNeighborhoods(int $neighborhoods): void
    {
        $this->neighborhoods = $neighborhoods;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }





}
