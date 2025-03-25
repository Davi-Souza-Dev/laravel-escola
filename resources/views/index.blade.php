<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificação de numero</title>
</head>
<body>
    <form action="{{route('verificarNum')}}" method="POST">
        @csrf
        <label for="numvalor">Escolha um valor:</label>
        <input type="number" name="numValor" id="numValor">
        <button type="submit">Verificar</button>
    </form>

    @isset($msg)
        <h1>{{ $msg }}</h1>
    @endisset
</body>
</html>