<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link href="{{url('https://fonts.googleapis.com/css?family=Nanum+Gothic|Rubik&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style_livro_mestres.css')}}">
    <link rel="icon" type="imagem/jpg" href="{{url('assets/imagens/icone.jpg')}}">
    <title>@yield('titulo')</title>
</head>
<body>

    <header>
        <a href="{{route('home')}}"><img id="img-mundial" src="{{url('assets/imagens/mundial.png')}}" alt="mundial"></a>
        <div class="buscador">
            <form method="get" action="">
                <label  name="input" ></label>
                <input id="txt-busca" name="buscador" type="text" placeholder="BUSCAR LIVRO..."/>
                <input id="btn-busca" type="submit" value="Ok">
            </form>
        </div>
        <div class="login-cadastro">
            <ul>
                <a href="{{route('login')}}"><li id="login_c">LOGIN</li></a>
                <a href="{{route('cadastro')}}"><li id="login_c">CRIAR CONTA</li></a>
            </ul>
        </div>
    </header>
        <div class="conteiner-menu">
            <nav class="menu-img">
                <a href="#"><img id="img-menu" src="{{url('assets/imagens/menu.png')}}" alt="menu"></a>
            </nav>
            <nav class="menu">
                <ul>
                    <a href="#"><li id="menu">Destaques</li></a>
                    <a href="{{route('livros')}}"><li id="menu">Livros</li></a>
                    <a href="#"><li id="menu">Autores</li></a>
                    <a href="#"><li id="menu">Editoras</li></a>
                    <a href="#"><li id="menu">Novidades</li></a>
                </ul>
            </nav>
        </div>

    @yield('conteudo_principal')
    
    <footer>
        <div class="rodape1">
            <ul>
                <li class="conteudo">(82) 3249-0580 (82) 3327-2257</li>
                <li class="conteudo">PARCELE EM ATÉ 6X NO CARTÃO </li>
                <li class="conteudo">ENTREGAMOS EM TODO O BRASIL</li>
            </ul>   
        </div>
        <div class="rodape2">
            <h3>©Todos os direitos reservados</h3>
            <h5>Desvolvido por <a id="h5-felipe"href="{{url('https://www.facebook.com/Pedro.felipe.m1')}}" target="_blank">Pedro Felipe</a></h5>
        </div>
    </footer>

    
</body>
</html>