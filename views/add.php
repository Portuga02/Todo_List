<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Todo List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="../assets/css/style_index.css">
</head>

<body>
	<div class="container">

		<h4 class="display-2 text-center">Adicionar</h4>

		<?php if ($error == 'exist') : /*Função verificadora caso exista um email já cadastrado em banco */ ?>
			<div class="alert alert-danger">Ops!! E-mail já está cadastrado em nosso sistema,Por favor cadastre um Email diferente.</div>
		<?php endif; ?>


		<div class="col col-xs-12">

			<form class="form-group"method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">

				<div >
					<div class="row">
						<label>Nome *</label>
						<input class="form-control" placeholder="Nome Completo" name="nome" required>
					</div>

					<div class="col-xs-12">
						<div class="row">
							<label>Email *</label>
							<input class="form-control" type="email" name="email" maxlength="35" placeholder="Email">
						</div>
					</div>
					<div class="col-xs-12">
						<button class="btn btn-dark" id="botoes" value="Adicionar"> ADICIONAR</button>
					</div>
			</form>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>