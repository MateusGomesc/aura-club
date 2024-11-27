<?php

require_once "Conexao.php";
require_once "Artista.php";

class ArtistaModel{
    public $table = 'artistas';

    public function create(Artista $artista){
        try{
            $sql = "INSERT INTO $this->table (nome, estilo, imagem) VALUES (?, ?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $artista->getNome());
            $stmt->bindValue(2, $artista->getEstilo());
            $stmt->bindValue(3, $artista->getImagem());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Artista');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_artista = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Artista');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Artista $artista){
        try{
            $sql = "UPDATE $this->table SET nome = ?, estilo = ?, imagem = ? WHERE id_artista = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $artista->getNome());
            $stmt->bindValue(2, $artista->getEstilo());
            $stmt->bindValue(3, $artista->getImagem());
            $stmt->bindValue(4, $artista->getId_artista());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_artista = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}