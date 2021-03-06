<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
    <br>
</div>

</html>