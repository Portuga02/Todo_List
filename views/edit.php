<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="assets/css/style.css">
        <title>Editar</title>
    </head>

    <body>
        <h3 class="display-2 text-center">Editar Usuários</h3>
        <div class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome: </label><br />
                    <input class="form-control" placeholder="Nome Completo" type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br /><br />
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">E-mail:<br /> </label><br />
                    <?php echo $info['email']; /* Retorno da variavel para mostrar o email já cadastrado não podendo mudar nesse sistema */ ?><br /><br />
                </div>
                <input class="btn btn-dark" type="submit" value="Salvar" />

            </form>
    </body>
    <br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>