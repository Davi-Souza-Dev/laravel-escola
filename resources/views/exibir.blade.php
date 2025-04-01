<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peso Ideal</title>
</head>
<body>
   <h1>Dados Calculados</h1>
   <p><strong>Altura:</strong> {{ $numAltura }}</p>
   <p><strong>Sexo:</strong> {{ $rdSexo }}</p>
   <p><strong>Seu peso ideal é de:</strong> {{ $pesoIdeal }}</p>

   <a href="{{ route("index")}}">Voltar</a>
</body>
</html>