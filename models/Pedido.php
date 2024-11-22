<?php

class Pedido{
    private int $id_pedido;
    private string $data;
    private float $valor_total;
    private int $id_user;


    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getValor_total()
    {
        return $this->valor_total;
    }

    public function setValor_total($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

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
}