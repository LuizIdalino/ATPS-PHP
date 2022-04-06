<a href="?pagina=inserir_selecao">Inserir nova seleção</a>
<table id="selecao">
	<thead>
		<tr>
			<th>Seleção</th>
			<th>Continente</th>
			<th>Grupo</th>
			<th>Tecnico</th>
			<th>goleiros</th>
			<th>laterais</th>
			<th>zangueiros</th>
			<th>Meio Campistas</th>
			<th>atacantes</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_selecao)){
				echo '<tr><td >'.$linha['selecao'].'</td>';
				echo '<td>'.$linha['continente'].'</td>';
				echo '<td>'.$linha['tecnico'].'</td>';
				echo '<td>'.$linha['goleiros'].'</td>';
				echo '<td>'.$linha['laterais'].'</td>';
				echo '<td>'.$linha['zagueiros'].'</td>';
				echo '<td>'.$linha['meio_campistas'].'</td>';
				echo '<td>'.$linha['atacantes'].'</td>';
		?>
			<td><a href="?pagina=inserir_selecao&editar=<?php echo $linha['id']; ?>">Editar</a></td>
			<td><a href="deleta_selecao.php?id_time=<?php echo $linha['id']; ?>">Deletar</a></td></tr>
			
		<?php
			}
		?>
	</tbody>

</table>
