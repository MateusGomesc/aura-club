<?php

require_once "Conexao.php";
require_once "User.php";

class UserModel{
    public $table = 'users';

    public function create(User $user){
        try{
            $sql = "INSERT INTO $this->table (nome, cpf, data_nasc, email, telefone, instagram, senha, imagem, rua, num, cidade, uf, bairro, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getCpf());
            $stmt->bindValue(3, $user->getData_nasc());
            $stmt->bindValue(4, $user->getEmail());
            $stmt->bindValue(5, $user->getTelefone());
            $stmt->bindValue(6, $user->getInstagram());
            $stmt->bindValue(7, $user->getSenha());
            $stmt->bindValue(8, $user->getImagem());
            $stmt->bindValue(9, $user->getRua());
            $stmt->bindValue(10, $user->getNum());
            $stmt->bindValue(11, $user->getCidade());
            $stmt->bindValue(12, $user->getUf());
            $stmt->bindValue(13, $user->getBairro());
            $stmt->bindValue(14, $user->getCep());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE id_user = ?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(User $user){
        try{
            $sql = "UPDATE $this->table SET nome = ?, cpf = ?, data_nasc = ?, email = ?, telefone = ?, instagram = ?, imagem = ?, rua = ?, num = ?, cidade = ?, uf = ?, bairro = ?, cep = ? WHERE id_user = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getCpf());
            $stmt->bindValue(3, $user->getData_nasc());
            $stmt->bindValue(4, $user->getEmail());
            $stmt->bindValue(5, $user->getTelefone());
            $stmt->bindValue(6, $user->getInstagram());
            $stmt->bindValue(7, $user->getImagem());
            $stmt->bindValue(8, $user->getRua());
            $stmt->bindValue(9, $user->getNum());
            $stmt->bindValue(10, $user->getCidade());
            $stmt->bindValue(11, $user->getUf());
            $stmt->bindValue(12, $user->getBairro());
            $stmt->bindValue(13, $user->getCep());
            $stmt->bindValue(14, $user->getId_user());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function updatePassword(User $user){
        try{
            $sql = "UPDATE $this->table SET senha = ? WHERE id_user = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $user->getSenha());
            $stmt->bindValue(2, $user->getId_user());
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM $this->table WHERE id_user = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }
}