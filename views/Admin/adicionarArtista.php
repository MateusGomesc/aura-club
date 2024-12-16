<?php
    include "../includes/input.php";
    include "../includes/autoLoad.php";
    Security::verifyAuthentication();
    
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

        require_once "../../controllers/ArtistaController.php";
    
        $ArtistaController = new ArtistaController();

        $artista = new Artista();
        $artista->setNome(htmlspecialchars($_POST['nome']));
        $artista->setEstilo(htmlspecialchars($_POST['estilo']));
        $artista->setImagem($caminho);

        $res = $ArtistaController->add($artista);
        
        if($res){
            header("location: ./");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Adicionar artista</title>
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
                input("nome", "Nome do artista:", "Digite o nome do artista");
                input("estilo", "Estilo do artista:", "Digite o estilo do artista");
                input("imagem", "Imagem do artista:", "", "file");
            ?>
            <button type="submit" class="btnRed">Adicionar</button>
        </form>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>