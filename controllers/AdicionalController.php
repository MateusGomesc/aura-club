<?php

require_once __DIR__ . "/../models/AdicionalModel.php";

class AdicionalController{
    private $model;

    function __construct(){
        $this->model = new AdicionalModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(Adicional $adicional){
        return $this->model->create($adicional);
    }

    public function edit(Adicional $adicional){
        return $this->model->update($adicional);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}