<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Todo List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/config.css">
    </head>

    <body>
        <div class="container">

            <h4 class="display-2 text-center">Adicionar</h4>

            <?php if ($error == 'exist') : /* Função verificadora caso exista um email já cadastrado em banco */ ?>
                <div class="alert alert-danger">Ops!! E-mail já está cadastrado em nosso sistema,Por favor cadastre um Email diferente.</div>
            <?php endif; ?>


            <div class="col col-xs-12">

                <form method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">


                    <div class="form-group">
                        <label for="exampleInputName1">Nome *</label>
                        <input class="form-control" placeholder="Nome Completo" name="nome" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email *</label>
                        <input class="form-control" type="email" name="email" maxlength="35" placeholder="E-mail">
                    </div>

                    <div class="col-xs-12">
                        <button id="botoesBaixo" class="btn btn-dark" id="botoes" value="Adicionar"> ADICIONAR</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>