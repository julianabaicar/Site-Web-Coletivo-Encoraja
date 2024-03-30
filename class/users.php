<?php
interface Users
{
    public function visualizarListaEvento();
    public function cadastrar();
}

class User implements Users{

    private int $id, $cpf, $password;
    private string $name, $email, $ft_nasc, $type;
    private bool $term_image, $term_data;

    public function __construct(int $cpf, int $password, string $name, string $email, string $ft_nasc, string $type, bool $term_image, bool $term_data)
    {
        $this->cpf = $cpf;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
        $this->ft_nasc = $ft_nasc;
        $this->type = $type;
        $this->term_image = $term_image;
        $this->term_data = $term_data;
    }


    public function visualizarListaEvento(){}
    public function cadastrar(){}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCpf(): int
    {
        return $this->cpf;
    }

    public function setCpf(int $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getPassword(): int
    {
        return $this->password;
    }

    public function setPassword(int $password): void
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getFtNasc(): string
    {
        return $this->ft_nasc;
    }

    public function setFtNasc(string $ft_nasc): void
    {
        $this->ft_nasc = $ft_nasc;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function isTermImage(): bool
    {
        return $this->term_image;
    }

    public function setTermImage(bool $term_image): void
    {
        $this->term_image = $term_image;
    }

    public function isTermData(): bool
    {
        return $this->term_data;
    }

    public function setTermData(bool $term_data): void
    {
        $this->term_data = $term_data;
    }


}

class Student extends User{
    private int $id;
    private bool $beneficiary;
    public function __construct(int $cpf, int $password, string $name, string $email, string $ft_nasc, string $type, bool $term_image, bool $term_data, bool $beneficiary) {
        parent::__construct($cpf, $password, $name, $email, $ft_nasc, $type, $term_image, $term_data);
        $this->beneficiary = $beneficiary;
    }

    public function escolherEvento()
    {

    }
    public function inscreverEvento()
    {

    }
    public function enviarComprovante()
    {

    }
    public function listarEventos()
    {

    }

    public function isBeneficiado(): bool
    {
        return $this->beneficiado;
    }

    public function setBeneficiado(bool $beneficiado): void
    {
        $this->beneficiado = $beneficiado;
    }

}

class Voluntary extends User
{
    private int $id;
    private string $availability, $course_experience, $how_did_know, $expectations;

    public function __construct(int $cpf, int $password, string $name, string $email, string $ft_nasc, string $type, bool $term_image, bool $term_data, string $availability, string $course_experience, string $how_did_know, string $expectations)
    {
        parent::__construct($cpf, $password, $name, $email, $ft_nasc, $type, $term_image, $term_data);
        $this->availability = $availability;
        $this->course_experience = $course_experience;
        $this->how_did_know = $how_did_know;
        $this->expectations = $expectations;
    }


    public function sugerirEventos()
    {

    }
    public function visualizarInscricao()
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

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }





}

class Administrator extends User
{
    private $id;
    public function __construct(int $cpf, int $password, string $name, string $email, string $ft_nasc, string $type, bool $term_image, bool $term_data) {
        parent::__construct($cpf, $password, $name, $email, $ft_nasc, $type, $term_image, $term_data);
    }

    public function aceitarEvento(){}
    public function rejeitarEvento(){}
    public function criarEvento(){}
    public function editarEvento(){}
    public function cadastrarUsuario(){}
    public function deletarUsuario(){}
    public function editarUsuario(){}
    public function visualizarRelatorio(){}
    public function visualizarInscricoes(){}
    public function aceitarInscricao(){}
    public function rejeitarInscricao(){}
}


