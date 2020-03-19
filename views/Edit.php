<h1>Editar</h1>
<div class="form">
	<form action="<?php echo URL;?>users/add" method="post">
		<input type="hidden" name="id" value="<?php echo $user["id"] ?>">
		<div class="input-container">
			<label for="nome">Nome*</label>
			<input type="text" name="nome" id="nome" required="required" value="<?php echo $user["name"] ?>">	
		</div>

		<div class="input-container">
			<label for="telefone">Telefone*</label>
			<input type="text" name="telefone" id="telefone" required="required" value="<?php echo $user["phone"] ?>">	
		</div>

		<div class="input-container">
			<label for="data_nascimento">Data Nascimento</label>
			<input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $user["date_birth"] ?>">	
		</div>

		<div class="input-container">
			<label for="endereco">Endereço</label>
			<input type="text" name="endereco" id="endereco" value="<?php echo $user["address"] ?>">	
		</div>

		<div class="input-container">
			<button id="btn-add">Editar</button>
		</div>
	</form>
</div>