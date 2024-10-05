<?php require_once("header.php") ?>

<h1>Exercício 02</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas">
                Horas trabalhadas no mês
            </label>
            <input type="number" id="horas_trabalhadas" name="horas_trabalhadas" class="form-control" />
        </div>
        <div class="col">
            <label for="valor_hora">
                Valor da hora
            </label>
            <input type="double" id="valor_hora" name="valor_hora" class="form-control" />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php
function calcularSalario($horas_trabalhadas, $valor_hora)
{
    return $horas_trabalhadas * $valor_hora;
}
if ($_POST) {
    $horas_trabalhadas = $_POST["horas_trabalhadas"];
    $valor_hora = $_POST["valor_hora"];

    echo (calcularSalario($horas_trabalhadas, $valor_hora));
}
require_once("footer.php")
?>