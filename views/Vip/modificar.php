<?php

require_once __DIR__ . "/../../controllers/UserController.php";
$UserController = new UserController();
$res = $UserController->editVip(intval($_GET['boolean']), intval($_GET['id']));
if($res){
    header("location: ../../home");
    exit();
}