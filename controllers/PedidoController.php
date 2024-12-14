<?php

require_once __DIR__ . "/../models/PedidoModel.php";
require_once __DIR__ . "/ProdutoAdicionalController.php";
require_once __DIR__ . "/ItemPedidoController.php";
require_once __DIR__ . "/../vendor/FlashMessage/FlashMessage.php";

class PedidoController{
    private $model;

    function __construct(){
        $this->model = new PedidoModel();
    }

    public function read(){

        return $this->model->read();
    }

    public function add(Pedido $pedido, $adicionais, $id_produto){
        $novo_pedido = $this->model->create($pedido);
        var_dump($adicionais);
        try{
            $ProdutoAdicionalController = new ProdutoAdicionalController();
            foreach($adicionais as $adicional){
                if(isset($adicional['bar']) && !empty($adicional['bar'])){
                    $ProdutoAdicional = new ProdutoAdicional();
                    $ProdutoAdicional->setId_produto($id_produto);
                    $ProdutoAdicional->setId_adicionais(1);
                    $ProdutoAdicionalController->add($ProdutoAdicional);
                }

                if(isset($adicional['food']) && !empty($adicional['food'])){
                    $ProdutoAdicional = new ProdutoAdicional();
                    $ProdutoAdicional->setId_produto($id_produto);
                    $ProdutoAdicional->setId_adicionais(2);
                    $ProdutoAdicionalController->add($ProdutoAdicional);
                }

                $ItemPedidoController = new ItemPedidoController();
                $ItemPedido = new ItemPedido;
                $ItemPedido->setQuantidade(1);
                $ItemPedido->setValor($adicional['price']);
                $ItemPedido->setId_pedido($novo_pedido->getId_pedido());
                $ItemPedido->setId_produto($id_produto);
                $ItemPedidoController->add($ItemPedido);
            }

        }
        catch(Exception $error){
            FlashMessage::setMessage("Erro ao realizar o pedido", 0);
        }

        return true;
    }

    public function edit(Pedido $pedido){
        return $this->model->update($pedido);
    }

    public function findId($id){
        return $this->model->findId($id);
    }

    public function remove($id){
        return $this->model->delete($id);
    }
}