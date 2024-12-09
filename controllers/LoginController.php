<?php
require_once "../../vendor/Security/Security.php";
require_once "../../vendor/Redirect/Redirect.php";
require_once "../../vendor/FlashMessage/FlashMessage.php";
require_once "../../models/UserModel.php";

class LoginController {

    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }

    public function login(User $user) {
        $rs = $this->model->login($user);
        if($rs) {
            $_SESSION[SessionConf::$sessionObj] = serialize($rs);
            Redirect::link(Security::path());
            exit();
        } else {
            FlashMessage::setMessage('Usuário ou senha inválido!', 0);
        }
    }

}