<?php
    
require_once("../interface/UserInterface.php");

class User implements Interface_user
{
    private int $id;
    private string $name;
    private string $email;
    private string $date_of_birth;
    private string $cpf;
    private string $password;
    private string $user_type;
    private bool $image_term;
    private bool $data_use_term;
    private Address $address;

    //add uma classe com um array como o exemplo da aula
    public function __construct(int $id = null, string $name = null, string $email = null, string $cpf = null, string $password = null, string $user_type = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->password = $password;
        $this->user_type = $user_type;
    }

    public function registerUser() : void {}

    public function eventList() : void {}

    public function getId(): int | null
    {
        return $this->id;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDateOfBirth(): string
    {
        return $this->date_of_birth;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUserType(): string
    {
        return $this->user_type;
    }

    public function getImageTerm(): bool
    {
        return $this->image_term;
    }

    public function getDataUseTerm(): bool
    {
        return $this->data_use_term;
    }
    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setDateOfBirth(string $date_of_birth): void
    {
        $this->date_of_birth = $date_of_birth;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setUserType(string $user_type): void
    {
        $this->user_type = $user_type;
    }

    public function setImageTerm(bool $image_term): void
    {
        $this->image_term = $image_term;
    }

    public function setDataUseTerm(bool $data_use_term): void
    {
        $this->data_use_term = $data_use_term;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}
