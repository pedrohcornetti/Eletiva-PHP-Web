<?php require("cabecalho.php"); ?>

<h1>Cadastro de Tarefa e Funcionário</h1>

<form action="tarefa_funcionario.php" method="POST">

    <div class="row">
        <div class="col">
            <label for="nome_tarefa">Nome da Tarefa</label>
            <input type="text" id="nome_tarefa" name="nome_tarefa" class="form-control" required />
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <label for="horas_tarefa">Total de Horas da Tarefa</label>
            <input type="number" id="horas_tarefa" name="horas_tarefa" class="form-control" required />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="complexidade">Complexidade da Tarefa</label>
            <select id="complexidade" name="complexidade" class="form-control" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
    </div>

    <h2>Dados do Funcionário</h2>
    <div class="row">
        <div class="col">
            <label for="nome_funcionario">Nome do Funcionário</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" required />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="horas_disponiveis">Total de Horas Disponíveis</label>
            <input type="number" id="horas_disponiveis" name="horas_disponiveis" class="form-control" required />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="nivel_experiencia">Nível de Experiência</label>
            <select id="nivel_experiencia" name="nivel_experiencia" class="form-control" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

function verificarCompatibilidade($horas_tarefa, $horas_disponiveis, $complexidade, $nivel_experiencia) {

    $horas_minimas = $horas_tarefa * 1.1;
    if ($horas_disponiveis < $horas_minimas) {
        return "O funcionário não tem horas disponíveis suficientes.";
    }


    if ($nivel_experiencia == 'junior' && $complexidade != 'baixa') {
        return "Funcionário júnior só pode realizar tarefas de baixa complexidade.";
    }
    
    if ($nivel_experiencia == 'pleno' && $complexidade == 'alta') {
        return "Funcionário pleno não pode realizar tarefas de alta complexidade.";
    }
    
    if ($nivel_experiencia == 'senior' && $complexidade == 'baixa') {
        return "Funcionário sênior não pode realizar tarefas de baixa complexidade.";
    }

    return "O funcionário pode realizar a tarefa.";
}

if ($_POST) {
    $nome_tarefa = $_POST['nome_tarefa'];
    $horas_tarefa = $_POST['horas_tarefa'];
    $complexidade = $_POST['complexidade'];
    $nome_funcionario = $_POST['nome_funcionario'];
    $horas_disponiveis = $_POST['horas_disponiveis'];
    $nivel_experiencia = $_POST['nivel_experiencia'];

    $resultado = verificarCompatibilidade($horas_tarefa, $horas_disponiveis, $complexidade, $nivel_experiencia);
    echo "<h3>Resultado:</h3>";
    echo "<p>$resultado</p>";
}

require("rodape.php"); ?>
