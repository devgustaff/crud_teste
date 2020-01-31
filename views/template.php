<!DOCTYPE html>
<html>
<head>
	<title><?php echo $viewName; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/style.css">
</head>
<body>
	<div class="content">
		<header>
			<nav>
				<div class="nav" id="nav-menu">
				    <ul>
						<li>
							<a href="<?php echo URL;?>">Adicionar</a>
						</li>
						<li>
							<a href="<?php echo URL;?>users">Lista de Usuários</a>
						</li>
					</ul>
				</div>
				<div class="mobile">
					<a href="javascript:void(0);" class="icon">
				   		<i class="fa fa-bars"></i>
					</a>
				</div>
			</nav>
		</header>
		<?php $this->loadView($viewName, $viewData); ?>	
		<div class="modal-bg">
			<div class="modal">
				<a class="fechar-modal" href="<?php echo URL;?>users">Fechar</a>
			</div>
		</div>
	</div>
	<script src="<?php echo URL;?>public/js/jquery.min.js"></script>
	<script src="<?php echo URL;?>public/js/jquery.mask.js"></script>
	<script src="<?php echo URL;?>public/js/script.js"></script>
	<script src="<?php echo URL;?>public/js/mascaras.js"></script>
	<script src="<?php echo URL;?>public/js/ajax.js"></script>
</body>
</html>