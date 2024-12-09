<?php

require_once __DIR__ . "/../models/ArtistaModel.php";

class ArtistaController{
    private $model;

    function __construct(){
        $this->model = new ArtistaModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(Artista $artista){
        return $this->model->create($artista);
    }

    public function edit(Artista $artista){
        return $this->model->update($artista);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}