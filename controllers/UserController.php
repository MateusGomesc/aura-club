<?php

require_once __DIR__ . "/../models/UserModel.php";
class UserController{
    private $model;

    function __construct(){
        $this->model = new UserModel();
    }

    public function read(){
        return $this->model->read();
    }

    public function add(User $user, $passwordConfirm){
        
        // CPF validation
        if(!$this->cpfValidation($user->getCpf())){
            return false;
        }

        // Email validation
        if(!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] = 'Email inválido!';
            return false;
        }

        // Number validation
        if(!$this->numberValidation($user->getTelefone())){
            $_SESSION['error'] = 'Telefone inválido!';
            return false;
        }

        // Instagram validation
        $regex = '/^@[a-zA-Z0-9._]{1,30}$/';
        if(!preg_match($regex, $user->getInstagram())){
            $_SESSION['error'] = 'Instagram inválido!';
            return false;
        }

        // Match password
        if($user->getSenha() !== $passwordConfirm){
            $_SESSION['error'] = 'Senhas não conferem!';
            return false;
        }

        return $this->model->create($user);
    }

    public function edit(User $user){
        // CPF validation
        if(!$this->cpfValidation($user->getCpf())){
            return;
        }

        // Email validation
        if(filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)){
            FlashMessage::setMessage("Email inválido!", 0);
            return;
        }

        // Number validation
        if(!$this->numberValidation($user->getTelefone())){
            FlashMessage::setMessage("Telefone inválido!", 0);
            return;
        }

        // Instagram validation
        $regex = '/^[a-zA-Z0-9](?:[a-zA-Z0-9._]{0,28}[a-zA-Z0-9])?$/';
        if(!preg_match($regex, $user->getInstagram())){
            FlashMessage::setMessage("Instagram inválido!", 0);
            return;
        }

        return $this->model->update($user);
    }

    public function editPassword(string $oldPassword, string $newPassword, string $confirmNewPassword, int $id){
        $user = $this->model->findId($id);

        // Verify old password
        if(md5($oldPassword) !== $user->getSenha()){
            FlashMessage::setMessage("Senha antiga inválida!", 0);
            return;
        }

        // Match new password
        if($newPassword !== $confirmNewPassword){
            FlashMessage::setMessage("Senhas novas não conferem!", 0);
            return;
        }

        $user->setSenha($newPassword);
        return $this->model->updatePassword($user);
    }

    public function editVip($boolean, $id){
        return $this->model->editVip($boolean, $id);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function findEmail($email){
        return $this->model->findEmail($email);
    }

    public function remove($id){
        return $this->model->delete($id);
    }

    private function redirectWithError($msg){
        $_SESSION['error'] = $msg;
        header('location: ./');
        exit;
    }

    private function cpfValidation($cpf){
        $cpf = preg_replace('/\D/', '', $cpf);

        if (strlen($cpf) != 11) {
            $this->redirectWithError('Número de caractes do CPF inválido!');
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            $this->redirectWithError('CPF inválido!');
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                $this->redirectWithError('CPF inválido!');
                return false;
            }
        }

        return true;
    }

    private function numberValidation($number){
        $number = preg_replace('/\D/', '', $number);

        if(strlen($number) < 10 || strlen($number) > 11){
            return false;
        }

        $regex = '/^(\d{2})(\d{8,9})$/';
        return preg_match($regex, $number);
    }
}