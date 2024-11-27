<?php

require_once "Conexao.php";
require_once "Pedido.php";

class PedidoModel{
    public $table = 'pedidos';

    public function create(Pedido $pedido){
        try{
            $sql = "INSERT INTO $this->table (data, valor_total, id_user) VALUES (?, ?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $pedido->getData());
            $stmt->bindValue(2, $pedido->getValor_total());
            $stmt->bindValue(3, $pedido->getId_user());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Pedido');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_pedido = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Pedido');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Pedido $pedido){
        try{
            $sql = "UPDATE $this->table SET data = ?, valor_total = ?, id_user = ? WHERE id_pedido = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $pedido->getData());
            $stmt->bindValue(2, $pedido->getValor_total());
            $stmt->bindValue(3, $pedido->getId_user());
            $stmt->bindValue(4, $pedido->getId_pedido());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_pedido = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}