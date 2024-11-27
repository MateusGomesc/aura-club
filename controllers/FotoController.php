<?php

require_once "../models/FotoModel.php";

class FotoController{
    private $model;

    function __construct(){
        $this->model = new FotoModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(Foto $foto){
        return $this->model->create($foto);
    }

    public function edit(Foto $foto){
        return $this->model->update($foto);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}