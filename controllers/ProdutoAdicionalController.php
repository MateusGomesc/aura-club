<?php

require_once "../models/ProdutoAdicionalModel.php";

class ProdutoAdicionalController{
    private $model;

    function __construct(){
        $this->model = new ProdutoAdicionalModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(ProdutoAdicional $produtoAdicional){
        return $this->model->create($produtoAdicional);
    }

    public function edit(ProdutoAdicional $produtoAdicional){
        return $this->model->update($produtoAdicional);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}