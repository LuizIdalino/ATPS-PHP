<?php if(!isset($_GET['editar'])){ ?>

<div id="form">
<h1>Insirir seleção</h1>

    <form method="post" action="processa_selecao.php">
        <br>
        <div id="text">
            <label>Nome seleção</label><br>
            <input type="text" nome="selecao" placeholder="Insera o nome da seleção">
        </div>

        <div>
            <label>Continente</label><br>
            <select id=continente>
                <option selected disabled value="">Selecione</option>
                <option>America do Norte</option>
                <option>America Central</option>
                <option>America do Sul</option>
                <option>África</option>
                <option>Europa</option>
                <option>Ásia</option>
                <option>Oceania</option>
            
            </select>               
        </div>

        <div id="grupo">
            <label>grupo</label><BR>
            <input type="radio" name="grupo" value="A">A
            <input type="radio" name="grupo" value="B">B
            <input type="radio" name="grupo" value="C">C
            <input type="radio" name="grupo" value="D">D
            <input type="radio" name="grupo" value="E">E
            <input type="radio" name="grupo" value="F">F
            <input type="radio" name="grupo" value="G">G
            <input type="radio" name="grupo" value="H">H
            </div>
            
    
        <div id="tecnico">
            <label>Tecnico</label><br>
            <input type="text" nome="Tecnico" placeholder="Insera o nome do tecnico">
        </div>

        <div id="goleiros">
            <label>goleiro</label><br>
            <input type="text" nome="goleiro" placeholder="Insera o nome do goleiro">
        </div>

        <div id="laterais">
            <label>laterais</label><br>
            <input type="text" nome="laterais" placeholder="Insera o nome do lateral">
        </div>

        <div id="zagueiros">
            <label>zagueiros</label><br>
            <input type="text" nome="zagueiros" placeholder="Insera o nome do  zagueiros">
        </div>

        <div id="meio_campistas">
            <label>Meio Campistas</label><br>
            <input type="text" nome="meio_campistas" placeholder="Insera o nome do  meio campo">
            
        </div>

        <div id="atacantes">
            <label>atacantes</label><br>
            <input type="text" nome="selecao" placeholder="Insera o nome do atacante">
            <br><br>
            <input type="submit" value="Inserir selecao">
        </div>
    </form>
</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_selecao)){ ?>
		<?php if($linha['id'] == $_GET['editar']){ ?>

            <div id="form">
			<h1>Editar Seleção</h1>
			<form method="post" action="edita_selecao.php">
				<input type="hidden" name="id_time" value="<?php echo $linha['id']; ?>">

				<br>

				<label>Nome seleção:</label><br>
				<input type="text" name="selecao" placeholder="Insira o nome da seleção" value="<?php echo $linha['selecao']; ?>">

				<br><br>

				<label>Continente</label><br>
                <select id=continente>
                <option selected disabled value="">Selecione</option>
                <option>America do Norte</option>
                <option>America Central</option>
                <option>America do Sul</option>
                <option>África</option>
                <option>Europa</option>
                <option>Ásia</option>
                <option>Oceania</option>
                </select>
				<br><br>

                <label>Tecnico</label><br>
                <input type="text" nome="Tecnico" placeholder="Insera o nome do tecnico" value="<?php echo $linha['tecnico']; ?>">


                <br><br>
                
                <label>goleiro</label><br>
                <input type="text" nome="goleiro" placeholder="Insera o nome do goleiro" value="<?php echo $linha['goleiros']; ?>">


                <br><br>

                <label>laterais</label><br>
                <input type="text" nome="laterais" placeholder="Insera o nome do lateral" value="<?php echo $linha['laterais']; ?>">


                <br><br>

                <label>zagueiros</label><br>
                <input type="text" nome="zagueiros" placeholder="Insera o nome do zagueiros" value="<?php echo $linha['zagueiros']; ?>">

                <br><br>

                <label>Meio Campistas</label><br>
                <input type="text" nome="meio_campistas" placeholder="Insera o nome do meio campo" value="<?php echo $linha['meio_campistas']; ?>">
               
                <br><br>

                <label>atacantes</label><br>
                <input type="text" nome="selecao" placeholder="Insera o nome do atacante" value="<?php echo $linha['atacantes']; ?>">
               
                <br><br>

			    <input  type="submit" value="Editar">
			</form>
        </div>
		<?php } ?>
	<?php } ?>
<?php } ?>
