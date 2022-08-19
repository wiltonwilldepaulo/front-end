<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>

    <div class="card m-2">
        <div class="card-header">
            <h3>Cadastro de cliente</h3>
        </div>
        <div class="card-body">
            <div class="alert alert-primary" role="alert">
                Dados com * são obrigatórios para o cadastro!
            </div>
            <form method="post" id="cliente" name="cliente">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome*</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome.">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="sobrenome" class="form-label">Sobre nome*</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobre nome.">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button id="btnsalvar" type="button" class="btn btn-success m-2">Salvar</button>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
</body>

</html>