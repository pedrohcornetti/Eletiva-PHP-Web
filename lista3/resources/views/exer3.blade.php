<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="/respostaexer3" method="POST">
    @CSRF
    <input type="number" name="valor1"/>
    <input type="number" name="valor2"/>
    <button type="submit">Calcular</button>
    </form>    
</body>
</html>