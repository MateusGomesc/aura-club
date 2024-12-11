<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

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

            if($stmt->execute()){
                // sending welcome mail
                $mail = new PHPMailer(true);

                try{
                    // configure mail
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'auraclub.suporte@gmail.com';
                    $mail->Password = 'dfvdgdtzfhtqyeaa';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465;

                    $mail->setFrom('auraclub.suporte@gmail.com', 'Aura Club');
                    $mail->addAddress($user->getEmail(), $user->getNome());

                    $html = file_get_contents(__DIR__ . '/../views/assets/email/welcome.html');

                    $mail->isHTML(true);
                    $mail->Subject = 'Seja bem-vindo (a) a Aura Club!';
                    $mail->Body = $html;
                    $mail->AltBody = 'Olá, obrigado por se cadastrar no nosso sistema! Estamos animados para ter você conosco.';

                    $mail->send();

                    return true;
                }
                catch(Exception $error){
                    $_SESSION['error'] = $mail->ErrorInfo;
                }
            }
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
            $stmt->bindValue(1, md5($user->getSenha()));
            $stmt->bindValue(2, $user->getId_user());
            return $stmt->execute();
        }
        catch(PDOException $error){
            FlashMessage::setMessage('Erro ao atualizar senha', 0);
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

    public function login(User $c)
    {   
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE email = ? AND senha = ?");
        $stmt->bindValue(1, $c->getEmail());
        $stmt->bindValue(2, $c->getSenha());
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function editVip($boolean, $id){
        try{
            $stmt = Conexao::getConn()->prepare("UPDATE $this->table SET vip = ? WHERE id_user = ?");
            $stmt->bindValue(1, $boolean);
            $stmt->bindValue(2, $id);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            return $stmt->execute();
        }
        catch(PDOException $error){
            $_SESSION['error'] = $error->getMessage();
        }
    }

    public function findEmail($email){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->table WHERE email = ?");
        $stmt->bindValue(1, $email);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();
        return $stmt->fetch();
    }
}