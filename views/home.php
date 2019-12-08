<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="assets/css/style_index.css">
	<title>Lista de Afazeres</title>
</head>
<!-- Depois de pronto colocar o botão para toldo List-->

<body>
	<button id="botoes" class="btn btn-dark"><a href="<?php echo BASE_URL; ?>contatos/add"> Adicionar Novo Usuário </a> </button> <br><br>


	<table width="900" text="responsive" class="table table-hover">
		<thead class="thead-dark ">
			<tr>
				<th scope="col"> Numero Cadastro</th>
				<th scope="col"> Nome</th>
				<th scope="col"> E-mail </th>
				<th scope="col" text="justify"> Ações </th>
				<th scope="col"> Anotações </th>
			</tr>
		</thead>
		<?php foreach ($lista as $item) : ?>
			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['nome']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td>
					<button id="botoes" class="btn btn-dark"><a href=" <?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza que deseja editar este registro?')">Editar Usuário</a></button>
					<button id="botoes" class="btn btn-dark"><a href=" <?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza que deseja excluir este registro?')">Excluir Usuário</a> </button>
				</td>
				<td>
					<button id="botoes" class="btn btn-dark"><a href="views/anotacoes.php"> Anotações</a> </button> <br><br>
			</tr> <?php endforeach; ?>
	</table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>