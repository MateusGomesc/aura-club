<?php

require_once "Conexao.php";
require_once "EventoArtista.php";

class EventoArtistaModel{
    public $table = 'evento_artista';

    public function create(EventoArtista $eventoArtista){
        try{
            $sql = "INSERT INTO $this->table (id_evento, id_produto) VALUES (?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $eventoArtista->getId_evento());
            $stmt->bindValue(2, $eventoArtista->getId_artista());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'EventoArtista');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_evento_artista = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'EventoArtista');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(EventoArtista $eventoArtista){
        try{
            $sql = "UPDATE $this->table SET nome = ?, data = ?, horario = ?, imagem = ?, id_produto = ? WHERE id_evento_artista = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $eventoArtista->getId_evento());
            $stmt->bindValue(2, $eventoArtista->getId_artista());
            $stmt->bindValue(3, $eventoArtista->getId_evento_artista());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_evento_artista = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}