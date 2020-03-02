<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/config.css">
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
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/uxs/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>