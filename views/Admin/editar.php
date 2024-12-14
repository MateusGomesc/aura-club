<?php
    include "../includes/input.php";
    include "../includes/autoLoad.php";
    
    require_once "../../controllers/ProdutoController.php";
    require_once "../../controllers/EventoController.php";

    if(isset($_POST) && !empty($_POST)){
        if(!empty($_FILES['imagem']['name'])){
            $EventoController = new EventoController();
            $evento = $EventoController->findId($_GET['id']);
            unlink($evento->getImagem());

            $caminho = "../assets/uploads/";
            if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho.$_FILES['imagem']['name'])){
                $caminho = "../assets/uploads/" . $_FILES['imagem']['name'];
            }
            else{
                FlashMessage::setMessage("Erro ao carregar a imagem", 0);
                Redirect::refresh();
            }
        }
    
        $ProdutoController = new ProdutoController();
        $EventoController = new EventoController();

        $produto = new Produto();
        $produto->setNome('Ticket');
        $produto->setValor(htmlspecialchars($_POST['valorTicket']));
        $produto->setId_produto($evento->getId_produto());
        $ticket = $ProdutoController->edit($produto);

        $evento = new Evento();
        $evento->setId_evento($_GET['id']);
        $evento->setNome(htmlspecialchars($_POST['nome']));
        $evento->setData(htmlspecialchars($_POST['data']));
        $evento->setImagem($caminho);
        $evento->setHorario(htmlspecialchars($_POST['horario']));
        $evento->setId_produto($ticket->getId_produto());
        $res = $EventoController->edit($evento);
        
        if($res){
            header("location: ../home");
            exit();
        }
    }
    else if(isset($_GET) && !empty($_GET)){
        $ProdutoController = new ProdutoController();
        $EventoController = new EventoController();

        $evento = $EventoController->findId($_GET['id']);
        $produto = $ProdutoController->findId($evento->getId_produto());
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Adicionar evento</title>
    <link rel="stylesheet" href="../assets/css/adicionar.css">
    <link rel="stylesheet" href="../assets/css/input.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <h2>Formulário:</h2>
        <?php FlashMessage::getMessage(); ?>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                input("nome", "Nome do evento:", "Digite o nome do evento", "text", "", "", "", "", $evento->getNome());
                input("data", "Data do evento:", '', 'date', '', '', '', '', $evento->getData());
                input("horario", "Horário do evento:", '', 'time', '', '', '', '', $evento->getHorario());
                input("valorTicket", "Valor do ingresso:", "Digite o valor do ingresso:", "number", '', '', '', '', $produto->getValor());
                input("imagem", "Imagem do evento:", "", "file");
            ?>
            <button type="submit" class="btnRed">Atualizar</button>
        </form>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>