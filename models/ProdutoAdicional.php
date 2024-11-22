<?php

class ProdutoAdicional{
    private int $id_produto_adicional;
    private int $id_produto;
    private int $id_adicionais;

    
    public function getId_produto_adicional()
    {
        return $this->id_produto_adicional;
    }

    public function setId_produto_adicional($id_produto_adicional)
    {
        $this->id_produto_adicional = $id_produto_adicional;

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

    public function getId_adicionais()
    {
        return $this->id_adicionais;
    }

    public function setId_adicionais($id_adicionais)
    {
        $this->id_adicionais = $id_adicionais;

        return $this;
    }
}