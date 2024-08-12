<?php require_once("header.php") ?>

<h1>Exercício 03</h1>
<h3>Distribuição de Bônus Anual</h3>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="rendimento_anual">
                Rendimento anual
            </label>
            <input type="double" id="rendimento_anual" name="rendimento_anual" class="form-control" />
        <div class="col">
            <label for="nome_funcionario">
                Nome do funcionário
            </label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" />
        </div>
        <div class="col">
            <label for="desempenho">Desempenho de 1 a 5</label>
            <select id="desempenho" name="desempenho" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular Bônus</button>
            </div>
        </div>
    </div>
</form>

<?php
function calcularBonus($rendimento_anual, $desempenho)
{
    $bonus = 0;
    if ($desempenho == 1) {
        $bonus = $rendimento_anual * 0.001;
    } elseif ($desempenho == 2) {
        $bonus = $rendimento_anual * 0.0025;
    } elseif ($desempenho == 3) {
        $bonus = $rendimento_anual * 0.0040;
    } elseif ($desempenho == 4) {
        $bonus = $rendimento_anual * 0.0055;
    } elseif ($desempenho == 5) {
        $bonus = $rendimento_anual * 0.007;
    }
    return $bonus;
}
if ($_POST) {
    $rendimento_anual = $_POST["rendimento_anual"];
    $desempenho = $_POST["desempenho"];
    $nome_funcionario = $_POST["nome_funcionario"];

    echo ("O funcionário " . $nome_funcionario . " receberá um bônus de " . calcularBonus($rendimento_anual, $desempenho));
}
require_once("footer.php")
?>