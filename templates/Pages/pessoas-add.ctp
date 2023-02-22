<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário de cadastro</title>
	<style>
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="text"], input[type="email"], input[type="date"], input[type="number"], input[type="password"], select {
			display: block;
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
			margin-bottom: 10px;
		}

		select {
			height: 40px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin: 10px auto 0;
			display: block;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

		.label {
			font-weight: bold;
			margin-bottom: 5px;
		}

		#endereco {
			border-top: 1px solid #ccc;
			padding-top: 20px;
		}
	</style>
</head>
<body>
	<form>
		<label for="nome-completo" class="label">Nome completo:</label>
		<input type="text" id="nome-completo" name="nome-completo" required>

		<label for="data-nascimento" class="label">Data de nascimento:</label>
		<input type="date" id="data-nascimento" name="data-nascimento" required>

		<label for="cpf" class="label">CPF:</label>
		<input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

		<label for="email" class="label">E-mail:</label>
		<input type="email" id="email" name="email" required>

		<label for="estado-civil" class="label">Estado civil:</label>
		<select id="estado-civil" name="estado-civil">
			<option value="" selected disabled>-- Selecione --</option>
			<option value="solteiro">Solteiro</option>
			<option value="casado">Casado</option>
			<option value="divorciado">Divorciado</option>
			<option value="viuvo">Viúvo</option>
		</select>

		<div id="endereco">
			<label for="cep" class="label">CEP:</label>
			<input type="text" id="cep" name="cep">

			<label for="estado" class="label">Estado:</label>
			<input type="text" id="estado" name="estado">

			<label for="cidade" class="label">Cidade:</label>
			<input type="text" id="cidade" name="cidade">

			<label for="endereco" class="label">Endereço:</label>
			<input type="text" id="endereco" name="endereco">

			<label for="numero" class="label">Número:</label>
			<input type="text" id="numero" name="numero">

			<label for="complemento" class="label">Complemento:</label>
			<input type="text" id="complemento" name="complemento">
		</div>

		<input type="submit" value="Cadastrar">
	</form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>
