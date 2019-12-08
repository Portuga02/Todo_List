<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Todo List</title>
	
	<link rel="stylesheet" href="../assets/css/style_index.css">
</head>

<body>
	<h3 class="display-2 text-center">Adicionar</h3>

	<?php if ($error == 'exist') : /*Função verificadora caso exista um email já cadastrado em banco */ ?>
		<div class="alert alert-danger">Ops!! E-mail já está cadastrado em nosso sistema,Por favor cadastre um Email diferente.</div>
	<?php endif; ?>

	<form method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">

		<div class="form-group">
			<label>Nome *</label>
			<input class="form-control" placeholder="Nome Completo" name="nome" required>
		</div>

		<div class="form-group">
			<label>Email *</label>
			<input class="form-control" type="email" name="email" maxlength="35" placeholder="Email">
		</div>

		<input class="btn btn-dark" id="botoes" type="submit" value="Adicionar" />

	</form>
</body>

</html>