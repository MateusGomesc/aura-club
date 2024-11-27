<?php

require_once "Conexao.php";
require_once "ItemPedido.php";

class ItemPedidoModel{
    public $table = 'item_pedido';

    public function create(ItemPedido $itemPedido){
        try{
            $sql = "INSERT INTO $this->table (id_pedido, id_produto, valor, quantidade) VALUES (?, ?, ?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $itemPedido->getId_pedido());
            $stmt->bindValue(2, $itemPedido->getId_produto());
            $stmt->bindValue(3, $itemPedido->getValor());
            $stmt->bindValue(4, $itemPedido->getQuantidade());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'ItemPedido');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_item_pedido = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'ItemPedido');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(ItemPedido $itemPedido){
        try{
            $sql = "UPDATE $this->table SET id_pedido = ?, id_produto = ?, valor = ?, quantidade = ? WHERE id_item_pedido = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $itemPedido->getId_pedido());
            $stmt->bindValue(2, $itemPedido->getId_produto());
            $stmt->bindValue(3, $itemPedido->getValor());
            $stmt->bindValue(4, $itemPedido->getQuantidade());
            $stmt->bindValue(5, $itemPedido->getId_item_pedido());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_item_pedido = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}