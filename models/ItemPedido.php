<?php

class ItemPedido{
    private int $id_item_pedido;
    private int $id_pedido;
    private int $id_produto;
    private float $valor;
    private int $quantidade;

    
    public function getId_item_pedido()
    {
        return $this->id_item_pedido;
    }
 
    public function setId_item_pedido($id_item_pedido)
    {
        $this->id_item_pedido = $id_item_pedido;

        return $this;
    }

    public function getId_pedido()
    {
        return $this->id_pedido;
    }

    public function setId_pedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;

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

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }
}