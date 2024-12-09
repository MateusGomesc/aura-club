<?php

require_once __DIR__ . "/../models/EventoModel.php";

class EventoController{
    private $model;

    function __construct(){
        $this->model = new EventoModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(Evento $evento){
        return $this->model->create($evento);
    }

    public function edit(Evento $evento){
        return $this->model->update($evento);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }

    public function fullInformation($id){
        return $this->model->fullInformation($id);
    }
}