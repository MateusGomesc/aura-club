<?php

class Foto{
    private int $id_foto;
    private string $url;
    private int $id_evento;

    public function getId_foto()
    {
        return $this->id_foto;
    }

    public function setId_foto($id_foto)
    {
        $this->id_foto = $id_foto;

        return $this;
    }
 
    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;

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
}