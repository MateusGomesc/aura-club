<?php

if(isset($_GET) && !empty($_GET)){
    require_once "../../controllers/ProdutoController.php";
    require_once "../../controllers/EventoController.php";
    
    include "../../vendor/FlashMessage/FlashMessage.php";
    
    $ProdutoController = new ProdutoController();
    $EventoController = new EventoController();
    
    $evento = $EventoController->findId($_GET['id']);
    if(file_exists($evento->getImagem())){
        unlink($evento->getImagem());
    }
    $resProduto = $ProdutoController->remove($evento->getId_produto());
    
    if($resProduto){
        $resEvento = $EventoController->remove($_GET['id']);
        if($resEvento){
            header("location: ./");
            exit();
        }
    }
    else{
        echo "Deu problema no produto";
    }
}
