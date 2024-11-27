<?php

require_once "Conexao.php";
require_once "ProdutoAdicional.php";

class ProdutoAdicionalModel{
    public $table = 'produto_adicional';

    public function create(ProdutoAdicional $produtoAdicional){
        try{
            $sql = "INSERT INTO $this->table (id_produto, id_adicionais) VALUES (?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $produtoAdicional->getId_produto());
            $stmt->bindValue(2, $produtoAdicional->getId_adicionais());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'ProdutoAdicional');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_produto_adicional = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'ProdutoAdicional');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(ProdutoAdicional $produtoAdicional){
        try{
            $sql = "UPDATE $this->table SET id_produto = ?, id_adicionais = ? WHERE id_produto_adicional = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $produtoAdicional->getId_produto());
            $stmt->bindValue(2, $produtoAdicional->getId_produto_adicional());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_produto_adicional = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}