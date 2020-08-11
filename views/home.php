<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> <link rel="stylesheet" href="assets/css/config.css">
        <title>Lista de Afazeres</title>
    </head>
    <!-- Depois de pronto colocar o botão para toldo List-->

    <body ">
        <div class=" container">
            <button id="botoes" class="btn btn-dark"><a href="<?php echo BASE_URL; ?>contatos/add"> Adicionar Novo Usuário </a> </button> <br><br>
        </div>
        <div class="container">
            <table text="responsive" class="table table-bordered">
                <thead class="thead-dark ">

                    <tr>
                <div class="row row-cols-2">
                    <th scope="col-xs-1"> Numero Cadastro</th>
                    <th scope="col-xs-1"> Nome Usuário</th>
                    <th scope="col-xs-1"> E-mail Cadastrado </th>
                    <th scope="col-xs-1"> Anotações </th>
                    <th scope="col-xs-1"> Editar Usuário </th>
                    <th scope="col-xs-1"> Excluir Usuário</th>
                </div>
                </tr>

                </thead>

        </div>

        <?php foreach ($lista as $item) : ?>
        <tbody>
            <tr>
                <td scope="row"><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['email']; ?></td>

                <td>
                    <button id="botoes" class="btn btn-dark"><a href="views/anotacoes.php"> Anotações</a> </button> <br><br>
                <td>
                    <button id="botoes" class="btn btn-dark"><a href=" <?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza que deseja editar este registro?')">Editar Usuário</a></button>
                <td>
                    <button id="botoes" class="btn btn-dark"><a href=" <?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza que deseja excluir este registro?')">Excluir Usuário</a> </button>
                </td>
            </td>
        </tr> <?php endforeach; ?>
</tbody>
</table>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></body>
</html>