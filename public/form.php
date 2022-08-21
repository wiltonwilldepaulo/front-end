<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag form</title>
</head>

<body>
    <h3>Cadastro de cliente</h3>
    <form action="cadastro.php" method="post">
        <label for="nome">
            Nome
        </label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="imagem">
            Imagem
        </label><br>
        <input type="file" name="imagem" id="imagem"><br>
        <br>
        <button name="btnsalvar" type="submit">
            Salvar
        </button>
    </form>

</body>

</html>