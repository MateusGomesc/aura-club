<?php

require_once "Conexao.php";
require_once "Foto.php";

class FotoModel{
    public $table = 'fotos';

    public function create(Foto $foto){
        try{
            $sql = "INSERT INTO $this->table (url, id_evento) VALUES (?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $foto->getUrl());
            $stmt->bindValue(2, $foto->getId_evento());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Foto');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_foto = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Foto');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Foto $foto){
        try{
            $sql = "UPDATE $this->table SET url = ?, id_evento = ? WHERE id_foto = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $foto->getUrl());
            $stmt->bindValue(2, $foto->getId_evento());
            $stmt->bindValue(3, $foto->getId_foto());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_foto = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}