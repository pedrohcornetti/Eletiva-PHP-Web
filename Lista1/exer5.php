<?php require("cabecalho.php"); ?>

<h1>Cálculo de Férias</h1>

<form action="calcular_ferias.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome_funcionario">Nome do Funcionário</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" required />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="dias_trabalhados">Total de Dias Trabalhados</label>
            <input type="number" id="dias_trabalhados" name="dias_trabalhados" class="form-control" required />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular Férias</button>
        </div>
    </div>
</form>

<?php

function calcularFerias($dias_trabalhados) {

    $dias_ferias = floor($dias_trabalhados / 30);
    

    if ($dias_ferias > 30) {
        $dias_ferias = 30;
    }

    return $dias_ferias;
}

if ($_POST) {
    $nome_funcionario = $_POST['nome_funcionario'];
    $dias_trabalhados = $_POST['dias_trabalhados'];


    $dias_ferias = calcularFerias($dias_trabalhados);

    // Exibe o resultado
    echo "<h3>Resultado:</h3>";
    echo "<p>O funcionário <strong>$nome_funcionario</strong> tem direito a <strong>$dias_ferias dias</strong> de férias.</p>";
}

require("rodape.php"); ?>
