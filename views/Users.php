<h1>Usuários</h1>
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo $user["name"] ?></td>
				<td><?php echo $user["email"] ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

