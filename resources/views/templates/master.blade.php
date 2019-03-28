<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Investindo</title>
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" rel="stylesheet">
    @yield('css-view')
</head>
<body>

    @include('templates.menu-lateral')

    <section id="view-conteudo">
        @yield('conteudo-view')
    </section>
    
    @yield('js-view')
    
</body>
</html>