<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/js/OwlCarousel2-2.3.4/dist/assets/wol.theme.default.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Rubik&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/jpg" href="{{('assets/imagens/icone.jpg')}}">
    <title>Mundial Livraria</title>
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

    <div class="owl-carousel owl-theme">
        <a href="{{route('livros.catan')}}"><img class ="item" src="{{url('assets/imagens/img1.jpg')}}" alt="img1"></a>
        <a href="{{route('livros.a-arte')}}"><img class ="item" src="{{url('assets/imagens/img2.jpg')}}" alt="img2"></a>
        <a href=""><img class ="item" src="{{url('assets/imagens/img3.jpg')}}" alt="img3"></a>
        <a href="{{route('livros.homem-de-ferro')}}"><img class ="item" src="{{url('assets/imagens/img4.jpg')}}" alt="img4"></a>
        <a href=""><img class ="item" src="{{url('assets/imagens/img5.jpg')}}" alt="img5"></a>
        <a href="{{route('livros.mestres')}}"><img class ="item" src="{{url('assets/imagens/img6.jpg')}}" alt="img6"></a>
    </div>

    <div>
        <br/>
        <br/>
        <h3>PRINCIPAIS CATEGORIAS</h1>
        <br/>
            <ul class="conteniner-cat">
                <a href="#"><li class="p_categoria"><img src="{{url('assets/imagens/cate1.png')}}" alt="cate1" width="30">OFERTAS</li></a>
                <a href="#"><li class="p_categoria"><img src="{{url('assets/imagens/cate2.png')}}" alt="cate2" width="30"> ECONOMIA</li></a>
                <a href="#"><li class="p_categoria"><img src="{{url('assets/imagens/cate3.png')}}" alt="cate3" width="32">POLÍTICA</li></a>
                <a href="#"><li class="p_categoria"><img src="{{url('assets/imagens/cate4.png')}}" alt="cate4" width="30"> JOGOS DE TABULEIRO</li></a>
                <a href="#"><li class="p_categoria"><img src="{{url('assets/imagens/cate5.png')}}" alt="cate5" width="30"> QUADRINHOS</li></a>
                <a href="#"><li class="p_categoria"><img src="{{url('assets/imagens/cate6.png')}}" alt="cate6" width="30"> ESTUDOS</li></a>
            </ul>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
        
    <div class="cont-livro">
        <a href="{{route('livros.mestres')}}"><li class="livro"><img src="{{url('assets/imagens/img-capita.jpg')}}" alt="" width="150"></li></a>
        <a href="#"><li class="livro"><img src="{{url('assets/imagens/img-keynes.jpg')}}" alt="" width="150"> </li></a>
        <a href="{{route('livros.catan')}}"><li class="livro"><img src="{{url('assets/imagens/img-catan.jpg')}}" alt="" width="150"></li></a>
        <a href="{{route('livros.homem-de-ferro')}}"><li class="livro"><img src="{{url('assets/imagens/img-homem.jpg')}}" alt="" width="150"></li></a>
    </div>
    <div class="cont-livro">
        <a href="{{route('livros.mestres')}}"><li class="livro"><img src="{{url('assets/imagens/img-capita.jpg')}}" alt="" width="150"></li></a>
        <a href="#"><li class="livro"><img src="{{url('assets/imagens/img-keynes.jpg')}}" alt="" width="150"> </li></a>
        <a href="{{route('livros.catan')}}"><li class="livro"><img src="{{url('assets/imagens/img-catan.jpg')}}" alt="" width="150"></li></a>
        <a href="{{route('livros.homem-de-ferro')}}"><li class="livro"><img src="{{url('assets/imagens/img-homem.jpg')}}" alt="" width="150"></li></a>
    </div>
    <div class="cont-livro">
        <a href="{{route('livros.mestres')}}"><li class="livro"><img src="{{url('assets/imagens/img-capita.jpg')}}" alt="" width="150"></li></a>
        <a href="#"><li class="livro"><img src="{{url('assets/imagens/img-keynes.jpg')}}" alt="" width="150"> </li></a>
        <a href="{{route('livros.catan')}}"><li class="livro"><img src="{{url('assets/imagens/img-catan.jpg')}}" alt="" width="150"></li></a>
        <a href="{{route('livros.homem-de-ferro')}}"><li class="livro"><img src="{{url('assets/imagens/img-homem.jpg')}}" alt="" width="150"></li></a>
    </div>

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
        <script src="{{url('assets/js/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/js/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/js/jquery.js')}}" type="text/javascript"></script>
</body>
</html>