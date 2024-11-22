<?php

class EventoArtista{
    private int $id_evento_artista;
    private int $id_evento;
    private int $id_artista;

    public function getId_evento_artista()
    {
        return $this->id_evento_artista;
    }

    public function setId_evento_artista($id_evento_artista)
    {
        $this->id_evento_artista = $id_evento_artista;

        return $this;
    }

    public function getId_evento()
    {
        return $this->id_evento;
    }

    public function setId_evento($id_evento)
    {
        $this->id_evento = $id_evento;

        return $this;
    }

    public function getId_artista()
    {
        return $this->id_artista;
    }

    public function setId_artista($id_artista)
    {
        $this->id_artista = $id_artista;

        return $this;
    }
}