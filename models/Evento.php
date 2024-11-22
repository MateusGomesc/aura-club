<?php

class Evento{
    private int $id_evento;
    private string $nome;
    private string $data;
    private string $horario;
    private string $imagem;
    private int $id_produto;

    
    public function getId_evento()
    {
        return $this->id_evento;
    }

    public function setId_evento($id_evento)
    {
        $this->id_evento = $id_evento;

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

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
 
    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function getId_produto()
    {
        return $this->id_produto;
    }

    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;

        return $this;
    }
}