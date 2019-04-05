<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-2">
        @include('inc.messages')
        @yield('content')
    </div>
    <footer id="footer" class="text-center fixed-bottom bg-dark pt-2">
        <p style="color:wheat" >Copyright &copy; 2019 TodoList</p>
    </footer>
</body>
</html>