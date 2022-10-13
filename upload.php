<?php

    if(isset($_POST["btn-cadastrar-produto"])) {
        $nome = $_POST['produto_nome'];
        $valor = $_POST['produto_valor'];
        $descricao = $_POST['produto_descricao'];
        $categoria = $_POST['produto_categoria'];
        $fabricante = $_POST['produto_fabricante'];
        $dados_imagem = $_FILES['produto_foto'];
        $imagem = $_FILES['produto_foto']['name'];

        $sql = "INSERT INTO produto (produto_id, produto_nome, produto_valor, produto_descricao, produto_categoria, produto_fabricante, produto_imagem) 
        VALUES (null, '$nome', '$valor', '$descricao', '$categoria', '$fabricante', '$imagem')";
        $resultado = mysqli_query($conectar, $sql);

        if ($resultado) {
                $ultimo_id = mysqli_insert_id($conectar); //Recupera o último id inserido no banco

                $diretorio = "imagens/$ultimo_id/"; //Diretório onde será salvo o arquivo

                mkdir($diretorio, 0755); //Cria o diretório

                $nome_produto = $imagem; //Define o nome do produto que será salvo no servidor

                move_uploaded_file($dados_imagem['tmp_name'], $diretorio . $nome_produto); //Move o arquivo do local temporário para o servidor e adiciona a extensão "jpg" para o arquivo

                header('location: produtos.php');
        }else{
            echo ("erro");
        }
    }

?>