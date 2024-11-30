<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="/respostaexer5" method="POST">
    @CSRF
    <input type="text" name="nota1"/>
    <input type="text" name="nota2"/>
    <input type="text" name="nota3"/>
    <button type="submit">Calcular Média</button>
    </form>    
</body>
</html>