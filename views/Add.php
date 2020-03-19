<?php 
	if (!empty($_GET["error"]) && $_GET["error"] == "error") {
		echo "Email já cadastrado";
	}
?>
<h1>Cadastrar</h1>
<div class="form">
	<form action="<?php echo URL;?>users/add" method="post">
		<div class="input-container">
			<label for="nome">Nome*</label>
			<input type="text" name="nome" id="nome" required="">	
		</div>
		
		<div class="input-container">
			<label for="email">Email*</label>
			<input type="text" name="email" id="email" required="">	
		</div>

		<div class="input-container">
			<label for="telefone">Telefone*</label>
			<input type="text" name="telefone" id="telefone" required="">	
		</div>

		<div class="input-container">
			<label for="data_nascimento">Data Nascimento</label>
			<input type="date" name="data_nascimento" id="data_nascimento">	
		</div>

		<div class="input-container">
			<label for="endereco">Endereço</label>
			<input type="text" name="endereco" id="endereco">	
		</div>

		<div class="input-container">
			<button id="btn-add">Cadastrar</button>
		</div>
	</form>
</div>

