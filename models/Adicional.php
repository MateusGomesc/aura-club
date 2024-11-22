<?php

class Adicional{
    private int $id_adicionais;
    private string $nome;
    private float $valor;

    public function getId_adicionais()
    {
        return $this->id_adicionais;
    }

    public function setId_adicionais($id_adicionais)
    {
        $this->id_adicionais = $id_adicionais;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}