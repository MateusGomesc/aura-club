<?php
    include "../includes/input.php";
    include "../includes/autoLoad.php";
    
    
    if(isset($_POST) && !empty($_POST)){
        if(!empty($_FILES['imagem']['name'])){
            $caminho = "../assets/uploads/";
            if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho.$_FILES['imagem']['name'])){
                $caminho = "../assets/uploads/" . $_FILES['imagem']['name'];
            }
            else{
                FlashMessage::setMessage("Erro ao carregar a imagem", 0);
                Redirect::refresh();
            }
        }

        require_once "../../controllers/ProdutoController.php";
        require_once "../../controllers/EventoController.php";
    
        $ProdutoController = new ProdutoController();
        $EventoController = new EventoController();

        $produto = new Produto();
        $produto->setNome('Ticket');
        $produto->setValor(htmlspecialchars($_POST['valorTicket']));
        $ticket = $ProdutoController->add($produto);

        $evento = new Evento();
        $evento->setNome(htmlspecialchars($_POST['nome']));
        $evento->setData(htmlspecialchars($_POST['data']));
        $evento->setImagem($caminho);
        $evento->setHorario(htmlspecialchars($_POST['horario']));
        $evento->setId_produto($ticket->getId_produto());
        $res = $EventoController->add($evento);
        
        if($res){
            header("location: ../home");
            exit();
        }
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
                input("nome", "Nome do evento:", "Digite o nome do evento");
                input("data", "Data do evento:", '', 'date');
                input("horario", "Horário do evento:", '', 'time');
                input("valorTicket", "Valor do ingresso:", "Digite o valor do ingresso:", "number");
                input("imagem", "Imagem do evento:", "", "file");
            ?>
            <button type="submit" class="btnRed">Adicionar</button>
        </form>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>