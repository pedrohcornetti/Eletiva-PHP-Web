<?php require("cabecalho.php"); ?>

<h1>Distribuição de Bônus Anual</h1>
<form action="distribuir_bonus.php" method="POST">

<div class="row">
    <div class="col">
        <label for="nome_funcionario">Nome do Funcionário</label>
        <input type="text" id="nome_funcionario"
            name="nome_funcionario" class="form-control" required />
    </div>

    <div class="col">
        <label for ="lucros">Lucro Anual da Empresa (R$)</label>
        <input type="number" id="lucros" name="lucros"
            class="form-control" step="0.01" required />
    </div>

    <div class="col">
        <label for ="desempenho">Desempenho (Escala de 1 a 5)</label>
        <input type="number" id="desempenho" name="desempenho"
            class="form-control" min="1" max="5" required />
    </div>
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular Bônus</button>
    </div>
</div>
</form>

<?php
    // Função para calcular o percentual com base no desempenho
    function calcularBonus($lucros, $desempenho){
        // Definindo a porcentagem de bônus com base no desempenho
        switch($desempenho){
            case 1:
                $percentual = 0.001; // 0,1%
                break;
            case 2:
                $percentual = 0.002; // 0,2%
                break;
            case 3:
                $percentual = 0.003; // 0,3%
                break;
            case 4:
                $percentual = 0.005; // 0,5%
                break;
            case 5:
                $percentual = 0.007; // 0,7%
                break;
            default:
                $percentual = 0; // Caso fora da escala
        }
        
        // Calcula o valor do bônus com base no percentual do lucro
        $bonus = $lucros * $percentual;
        return $bonus;
    }

    if ($_POST) {
        $nome_funcionario = $_POST['nome_funcionario'];
        $lucros = $_POST['lucros'];
        $desempenho = $_POST['desempenho'];

        // Calcula o bônus
        $bonus = calcularBonus($lucros, $desempenho);

        // Exibe o resultado
        echo "Funcionário: " . $nome_funcionario . "<br>";
        echo "Desempenho: " . $desempenho . "<br>";
        echo "Bônus anual: R$ " . number_format($bonus, 2, ',', '.');
    }

require("rodape.php"); ?>
