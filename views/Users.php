<h1>Usuários</h1>
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo $user["name"] ?></td>
				<td><?php echo $user["email"] ?></td>
				<td><a href="<?php URL ?>users/edit/<?php echo $user["id"] ?>">Editar</a></td>
				<td><a href="<?php URL ?>users/delete/<?php echo $user["id"] ?>">Excluir</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

