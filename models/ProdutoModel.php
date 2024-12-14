<?php

require_once "Conexao.php";
require_once "Produto.php";

class ProdutoModel{
    public $table = 'produtos';

    public function create(Produto $produto){
        try{
            $sql = "INSERT INTO $this->table (nome, valor) VALUES (?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getValor());
            $stmt->execute();
            $lastId = Conexao::getConn()->lastInsertId();
            $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_produto = ?");
            $stmt->bindValue(1, $lastId);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
            $stmt->execute();
            return $stmt->fetch();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_produto = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Produto $produto){
        try{
            $sql = "UPDATE $this->table SET nome = ?, valor = ? WHERE id_produto = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getValor());
            $stmt->bindValue(3, $produto->getId_produto());
            $stmt->execute();
            $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_produto = ?");
            $stmt->bindValue(1, $produto->getId_produto());
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Produto');
            $stmt->execute();
            return $stmt->fetch();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_produto = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}