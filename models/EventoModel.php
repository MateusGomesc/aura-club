<?php

require_once "Conexao.php";
require_once "Evento.php";

class EventoModel{
    public $table = 'eventos';

    public function create(Evento $evento){
        try{
            $sql = "INSERT INTO $this->table (nome, data, horario, imagem, id_produto) VALUES (?, ?, ?, ?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $evento->getNome());
            $stmt->bindValue(2, $evento->getData());
            $stmt->bindValue(3, $evento->getHorario());
            $stmt->bindValue(4, $evento->getImagem());
            $stmt->bindValue(5, $evento->getId_produto());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Evento');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_evento = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Evento');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Evento $evento){
        try{
            $sql = "UPDATE $this->table SET nome = ?, data = ?, horario = ?, imagem = ?, id_produto = ? WHERE id_evento = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $evento->getNome());
            $stmt->bindValue(2, $evento->getData());
            $stmt->bindValue(3, $evento->getHorario());
            $stmt->bindValue(4, $evento->getImagem());
            $stmt->bindValue(5, $evento->getId_produto());
            $stmt->bindValue(6, $evento->getId_evento());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_evento = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}