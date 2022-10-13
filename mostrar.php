<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $sql = "SELECT * FROM produto ORDER BY produto_id DESC  ";
        $resultado = mysqli_query($conectar, $sql);

        while ($registro = mysqli_fetch_array($resultado)) {
            $id = $registro['produto_id'];
            $nome = $registro['produto_nome'];
            $valor = $registro['produto_valor'];    
            $descricao = $registro['produto_descricao'];
            $fabricante = $registro['produto_fabricante'];
            $imagem = $registro['produto_imagem'];

            echo'<div class="produto">';
                echo'<div class="img-produto">';
                    echo "<img src='imagens/$id/$imagem'><br>";
                echo'</div>';
                echo'<div class="infos-produto">';
                    echo"<h1>".$nome."</h1>";
                    echo"<p>".$descricao."</p>";
                    echo"<p>".$fabricante."</p>";
                    echo"<p>R$<span>".$valor."</span></p>";
                echo'</div>';
                echo'<div class="btns-produto">';
                    echo'<button class="list-btn-view">Ver</button> <button class="list-btn-edit">Editar</button> <button class="list-btn-delete">Remover</button>';
                echo'</div>';
            echo'</div>';
        }
    ?>
</body>
</html>