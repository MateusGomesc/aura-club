<?php

class Produto{
    private int $id_produto;
    private string $nome;
    private float $valor;

    
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

    public function getId_produto()
    {
        return $this->id_produto;
    }

    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;

        return $this;
    }

    public function formatPrice(){
        return 'R$' . number_format($this->valor, 2, ',', '.');
    }
}