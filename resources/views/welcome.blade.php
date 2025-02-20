<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-red-900 text-slate-50 h-full">
    <h1 class="font-bold text-3xl">Olá Mundo!</h1>
</body>
</html>