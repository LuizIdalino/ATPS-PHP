<h1>Inserir Seleção</h1>
<form method="post" action="processa_selecao.php">
    <div>
        <label>Seleção</label>
            <input type="text" nome="selecao" placeholder="Insira o nome da seleçao">
    </div>

    <div>
        <label>Continente</label>
            <select>
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

    <div>
        <label>Tecnico</label>
            <input type="text" nome="tecnico" placeholder="Insira o nome do tecnico">
    </div>

    <div>
        <label>Goleiro</label>
            <input type="text" nome="goleiro" placeholder="Insira o nome do goleiro">
    </div>

    <div>
        <label>zagueiro</label>
            <input type="text" nome="zagueiro" placeholder="Insira o nome do zagueiro">
    </div>

    <div>
        <label>lateral</label>
            <input type="text" nome="lateral" placeholder="Insira o nome do lateral">
    </div>

    <div>
        <label>Meio Campista</label>
            <input type="text" nome="meio_campista" placeholder="Insira o nome do Meio Campo">
    </div>

    <div>
        <label>atacante</label>
            <input type="text" nome="atacante" placeholder="Insira o nome do atacante">
    </div>

    <div>
        <input type="submit" value="cadastrar">
    </div>
</form>