<?php

class Artista{
    private int $id_artista;
    private string $nome;
    private string $estilo;
    private string $imagem;


    public function getId_artista()
    {
        return $this->id_artista;
    }

    public function setId_artista($id_artista)
    {
        $this->id_artista = $id_artista;

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

    public function getEstilo()
    {
        return $this->estilo;
    }

    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

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
}