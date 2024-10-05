<?php require("cabecalho.php"); ?>

<h1>Calcular Salário Semanal</h1>
<form action="calcular_salario.php" method="POST">

<div class="row">
    <div class="col">
        <label for="horas_trabalhadas">Horas Trabalhadas no Mês</label>
        <input type="number" id="horas_trabalhadas"
            name="horas_trabalhadas" class="form-control" step="0.01" required />
    </div>

    <div class="col">
        <label for ="valor_hora">Valor da Hora</label>
        <input type="number" id="valor_hora" name="valor_hora"
            class="form-control" step="0.01" required />
    </div>
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular Salário Semanal</button>
    </div>
</div>
</form>

<?php
    function calcularSalarioSemanal($horas_trabalhadas, $valor_hora){ 
        $salario_mensal = $horas_trabalhadas * $valor_hora; 
        $salario_semanal = $salario_mensal / 4;
        return $salario_semanal;
    }

    if ($_POST) {
        $horas_trabalhadas = $_POST['horas_trabalhadas'];
        $valor_hora = $_POST['valor_hora'];

        echo "Salário semanal: R$ " . number_format(calcularSalarioSemanal($horas_trabalhadas, $valor_hora), 2, ',', '.');
    }

require("rodape.php"); ?>
