<?php

require_once __DIR__ . "/../models/ItemPedidoModel.php";
require_once __DIR__ . "/ProdutoAdicionalController.php";

class ItemPedidoController{
    private $model;

    function __construct(){
        $this->model = new ItemPedidoModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(ItemPedido $itemPedido){
        return $this->model->create($itemPedido);
    }

    public function edit(ItemPedido $itemPedido){
        return $this->model->update($itemPedido);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}