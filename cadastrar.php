<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="inputs">
            <div class="input"><span>Nome</span><input type="text" name="produto_nome" placeholder="Digite o nome do produto"></div>
            <div class="input"><span>Valor</span><input type="number" name="produto_valor" placeholder="R$"></div>
            <div class="input"><span>Descrição</span><textarea name="produto_descricao" placeholder="Digite uma breve descrição sobre o produto"></textarea></div>
            <div class="input"><span>Categoria</span><input type="text" name="produto_categoria" placeholder="Escolha a categoria do produto"></div>
            <div class="input"><span>Fabricante</span><input type="text" name="produto_fabricante" placeholder="Escolha o fabricante do produto"></div>
            <div class="input"><input class="input-imagem" type="file" name="produto_foto"></div>
        </div>

        <div class="btns-forms">
            <input class="list-btn-edit" type="submit" name="btn-cadastrar-produto" value="Cadastrar">
            <input class="btn-back" type="reset" value="Excluir">
        </div>
    </form>
</body>
</html>