<?php
require_once 'User.php';
class Address{

    private int $number;
    private int $zip_code;
    private string $street;
    private string $city;
    private string $neighborhoods;

    public function registerAddress(int $number, int $zip_code, string $street, string $city, string $neighborhoods)
    {
        $this->number = $number;
        $this->zip_code = $zip_code;
        $this->street = $street;
        $this->city = $city;
        $this->neighborhoods = $neighborhoods;
    }

    public function changeAddress(int $number, int $zip_code, string $street, string $city, string $neighborhoods)
    {
        $this->number = $number;
        $this->zip_code = $zip_code;
        $this->street = $street;
        $this->city = $city;
        $this->neighborhoods = $neighborhoods;
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

    public function getNeighborhoods(): string
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