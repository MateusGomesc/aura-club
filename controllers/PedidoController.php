<?php

require_once "../models/PedidoModel.php";

class PedidoController{
    private $model;

    function __construct(){
        $this->model = new PedidoModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(Pedido $pedido){
        return $this->model->create($pedido);
    }

    public function edit(Pedido $pedido){
        return $this->model->update($pedido);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}