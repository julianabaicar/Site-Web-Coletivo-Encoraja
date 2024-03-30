<?php

interface EventosList
{
    public function listarEventos();
}

class Evento {
    private int $id_evento, $qtde_vagas;
    private string $data_hora, $descricao, $nome, $modalidade, $tipo, $publico_alvo, $material, $area_interesse;
    private bool $status;

    public function cadastrarEvento(){}
    public function excluirEvento(){}
    public function editarEvento(){}
    public function gerarAgendaEventos(){}
    public function listarEventos(){}
    public function listarAlunos(){}

    public function getQtdeVagas(): int
    {
        return $this->qtde_vagas;
    }

    public function setQtdeVagas(int $qtde_vagas): void
    {
        $this->qtde_vagas = $qtde_vagas;
    }

    public function getDataHora(): string
    {
        return $this->data_hora;
    }

    public function setDataHora(string $data_hora): void
    {
        $this->data_hora = $data_hora;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getModalidade(): string
    {
        return $this->modalidade;
    }

    public function setModalidade(string $modalidade): void
    {
        $this->modalidade = $modalidade;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getPublicoAlvo(): string
    {
        return $this->publico_alvo;
    }

    public function setPublicoAlvo(string $publico_alvo): void
    {
        $this->publico_alvo = $publico_alvo;
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }

    public function getAreaInteresse(): string
    {
        return $this->area_interesse;
    }

    public function setAreaInteresse(string $area_interesse): void
    {
        $this->area_interesse = $area_interesse;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }



}
