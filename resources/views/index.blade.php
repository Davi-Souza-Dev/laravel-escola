<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peso Ideal</title>
</head>
<body>
    <form action="{{route('calcular')}}" method="post">
        @csrf
        <h3>Peso Ideal</h3>
        <label for="numAltura">Qual a sua altura:</label> 
        <input type="number" name="numAltura" id="numAltura" step="any" >
        <br/>
        <label><strong>Sexo:</strong></label>
        <br/>
        <input type="radio" name="rdSexo" value="Masculino" id="rdMasc" checked>
        <label for="rdMasc">Masculino</label>
        <input type="radio" name="rdSexo" value="Feminino" id="rdFem">
        <label for="rdFem">Feminino</label>
        <br/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>