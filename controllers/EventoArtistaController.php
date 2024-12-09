<?php

require_once "../models/EventoArtistaModel.php";

class EventoArtistaController{
    private $model;

    function __construct(){
        $this->model = new EventoArtistaModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(EventoArtista $eventoArtista){
        return $this->model->create($eventoArtista);
    }

    public function edit(EventoArtista $eventoArtista){
        return $this->model->update($eventoArtista);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }

    public function findAll($id){
        return $this->model->findAll($id);
    }
}