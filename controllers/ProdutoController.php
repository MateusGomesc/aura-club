<?php

require_once "../models/ProdutoModel.php";

class ProdutoController{
    private $model;

    function __construct(){
        $this->model = new ProdutoModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(Produto $produto){
        return $this->model->create($produto);
    }

    public function edit(Produto $produto){
        return $this->model->update($produto);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}