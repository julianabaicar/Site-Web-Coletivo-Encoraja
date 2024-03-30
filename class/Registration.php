<?php

class Inscricao {
    private Evento $evento;
    private Aluno $aluno;
    private $comprovante;

    public function cadastrarInscricao(){}
    public function cancelarInscricao(){}
    public function listarInscritos($evento){}
    public function visualizarInscricao(){}

    public function getEvento(): Evento
    {
        return $this->evento;
    }
    public function setEvento(Evento $evento): void
    {
        $this->evento = $evento;
    }
    public function getAluno(): Aluno
    {
        return $this->aluno;
    }
    public function setAluno(Aluno $aluno): void
    {
        $this->aluno = $aluno;
    }
    public function getComprovante()
    {
        return $this->comprovante;
    }
    public function setComprovante($comprovante): void
    {
        $this->comprovante = $comprovante;
    }


}
