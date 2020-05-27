@extends('template')

@section('titulo', 'Homem de Ferro: Stark – a queda')

@section('conteudo_principal')
      
    <div class="conteiner-livro"> 
        <div class="conteudo1">
            <p><a href="{{url('https://pt.wikipedia.org/wiki/Matt_Fraction')}}" target="_blank">Matt Fraction</a><p>
            </br>
            <h1 id="cont">Homem de Ferro: Stark – a queda</h1>
            </br>
            <p id="cont-preço"><strike>R$222,90</strike></p>
            <p id="cont-preço">R$<b id="valor">142,65</b> <i id="tag-i">-36%</i></p>
        </div>
            <img id=imagem src="{{url('assets/imagens/img-homem.jpg')}}" alt="imagem">
        <div class="ico-comprar">
            <p id="ico-cari1"><a id="a-color" href="#">COMPRAR</a></P>
            <p id="ico-cari2"><a id="b-color" href="#">ADICIONAR AO CARRINHO</a></p>
        </div> 
    </div>
    <div class="descrip">
        <div class="item-detalhe">
            <label>Páginas</label>
            <span>360</span>
        </div>
        <div class="item-detalhe">
            <label>Idiomas</label>
            <span id="span1">Português</span>
        </div> 
        <div class="item-detalhe">
            <label>ISBN</label>
            <span id="span1">9788542622171</span>
        </div> 
        <div class="item-detalhe">
            <label>Medida</label>
            <span id="span1">17.6 x 26.6 cm</span>
        </div> 
        <div class="item-detalhe">
            <label>Editora</label>
            <span>Panini</span>
    </div>
    <div class="sinopse">
        <h4>
            Sinopse <i id="titulo">Homem de Ferro: Stark – a queda</i>
        </h4> 
        <div class="descrição">
            </br>
            <p>
                Tony stark ludibriou norman osborn, o humilhou ao vivo na televisão e manteve a salvo o banco de dados que lista as identidades secretas de super-humanos. Mas, ao fazer isso, 
                ele perdeu tudo: sua armadura, seus poderes e até mesmo sua mente. Agora, totalmente indefeso, em coma e com sua vida desmantelada, tony dependerá de seus últimos traços de determinação
                e um grupo de amigos – incluindo thor, capitão américa, máquina de combate, doutor estranho, pepper potts e maria hill – para impedir que ele perca tudo.
            </p>
            </br>
            </br>
            <div>
                <b>Ficha Técnica:</b>
                </br>
                <ul>
                    <li>ISBN: 9788542622171</li>
                    <li>Editora: Panini</li>
                    <li>Dimensões: 17.6 x 26.6 cm</li>
                    <li>Idioma: Português</li>
                    <li>Páginas: 360</li>
                </ul>
            </div>
        </div>
    </div>

@endsection