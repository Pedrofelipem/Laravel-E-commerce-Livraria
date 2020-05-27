@extends('template')

@section('titulo', 'Catan - O jogo')

@section('conteudo_principal')
      
    <div class="conteiner-livro"> 
        <div class="conteudo1">
            </br>
            <h1 id="cont">Catan - O jogo</h1>
            </br>
            <p id="cont-preço"><strike>R$209,90</strike></p>
            <p id="cont-preço">R$<b id="valor">199,41</b> <i id="tag-i">-5%</i></p>
        </div>
            <img id=imagem src="{{url('assets/imagens/img-catan.jpg')}}" alt="imagem">
        <div class="ico-comprar">
            <p id="ico-cari1"><a id="a-color" href="#">COMPRAR</a></P>
            <p id="ico-cari2"><a id="b-color" href="#">ADICIONAR AO CARRINHO</a></p>
        </div> 
    </div>
    <div class="descrip">

        <div class="item-detalhe">
            <label>EAN</label>
            <span id="span1">8436017228182</span>
        </div> 
        <div class="item-detalhe">
            <label>Medida</label>
            <span id="span1">29 x 29 cm</span>
        </div> 
        <div class="item-detalhe">
            <label>Fabricante</label>
            <span id="span1">Devir JG</span>
    </div>
        <div class="descrição">
            <p><b>Descrição</b></p> 
            </br>
            </br>
            <p>
                Imagine-se na era das descobertas! Após uma longa viagem, seus navios finalmente chegaram a costa de uma ilha desconhecida chamada Catan!
                E você não é o único que a descobriu. Há outros marinheiros destemidos que também desembarcaram nestas praias a fim de colonizar a ilha, dando início a um jogo divertido e cheio de emoção!
            </p>
            </br>
            <p>
                Catan é um jogo de tabuleiro moderno que conquistou famílias do mundo todo! Criado por Klaus Teuber em 1952, o título tem se destacado entre os board games por deixar o acaso de lado. Pois até então,
                os jogos de tabuleiros se baseavam apenas na sorte, diferente em Catan, onde a dinâmica das partidas se baseia na vitória do jogador que tomar as melhores decisões.
            </p>
            </br>
            <p><b>Conteúdo:</b></p>
            </br>
            <p>
                95 Cartas de matéria prima; 25 Cartas de desenvolvimento; 2  Cartas Especiais; 4  Cartas de custo de construção; 16 Cidades; 20 Aldeias; 60 Estradas; 18 Fichas numeradas; 2  Dados; 6 Cartões de mar; 1 Ladrão;
                1 Regra; 1 Almanaqque dos colonizadores; 19 hexágonos com diferentes tipos de terreno.
            </p>
            </br>
            <p><b>Jogadores: 3 a 4</b></p>
            </br>
            <p><b>Duração: 75 minutos</b></p>
            </br>
            <div>
                <b>Ficha Técnica:</b>
                </br>
                <ul>
                    <li>EAN: 8436017228182</li>
                    <li>Fabricante: Devir Jogos</li>
                    <li>Medidas: 29 x 29 cm</li>
                </ul>
            </div>
        </div>

@endsection