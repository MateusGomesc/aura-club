<?php

require_once "Conexao.php";
require_once "Adicional.php";

class AdicionalModel{
    public $table = 'adicionais';

    public function create(Adicional $adicional){
        try{
            $sql = "INSERT INTO $this->table (nome, valor) VALUES (?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $adicional->getNome());
            $stmt->bindValue(2, $adicional->getValor());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Adicional');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_adicionais = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Adicional');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Adicional $adicional){
        try{
            $sql = "UPDATE $this->table SET nome = ?, valor = ? WHERE id_adicionais = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $adicional->getNome());
            $stmt->bindValue(2, $adicional->getValor());
            $stmt->bindValue(3, $adicional->getId_adicionais());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_adicionais = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}