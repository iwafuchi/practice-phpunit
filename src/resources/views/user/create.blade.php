<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    create.blade.php
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <p><label for="name">name:<input type="text" id="name" name="name"></p>

        <p><label for="email">email:<input type="email" id="email" name="email"></p>

        <p><label for="password">password:<input type="password" id="password" name="password"></p>
        <button type="submit">作成</button>
    </form>
</body>

</html>
