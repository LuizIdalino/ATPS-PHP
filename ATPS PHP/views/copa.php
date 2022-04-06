<table id="selecao">
	<thead>
		<tr>
			<th>Seleção</th>
			<th>Continente</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_selecao)){
				echo '<tr><td >'.$linha['selecao'].'</td>';
				echo '<td>'.$linha['continente'].'</td>';
		?>
				
		<?php
			}
		?>
	</tbody>

</table>