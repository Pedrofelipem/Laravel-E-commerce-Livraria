@extends('template')

@section('titulo', 'A arte de pensar')

@section('conteudo_principal')
      
    <div class="conteiner-livro"> 
        <div class="conteudo1">
            <p><a href="{{url('https://pt.wikipedia.org/wiki/Ernest_Dimnet')}}" target="_blank">Ernest Dimnet</a><p>
            </br>
            <h1 id="cont">A arte de pensar</h1>
            </br>
            <p id="cont-preço"><strike>R$42,90</strike></p>
            <p id="cont-preço">R$<b id="valor">22,45</b> <i id="tag-i">-36%</i></p>
        </div>
            <img id=imagem src="{{url('assets/imagens/a-arte.jpg')}}" alt="imagem">
        <div class="ico-comprar">
            <p id="ico-cari1"><a id="a-color" href="#">COMPRAR</a></P>
            <p id="ico-cari2"><a id="b-color" href="#">ADICIONAR AO CARRINHO</a></p>
        </div> 
    </div>

    <div class="descrip">
        <div class="item-detalhe">
            <label>Páginas</label>
            <span>200</span>
        </div>
        <div class="item-detalhe">
            <label>Idiomas</label>
            <span id="span1">Português</span>
        </div> 
        <div class="item-detalhe">
            <label>ISBN</label>
            <span id="span1">9788594090348</span>
        </div> 
        <div class="item-detalhe">
            <label>Medida</label>
            <span id="span1">14 x 21 cm</span>
        </div> 
        <div class="item-detalhe">
            <label>Editora</label>
            <span>Kírion</span>
    </div>
    <div class="sinopse">
        <h4>
            Sinopse <i id="titulo">A arte de pensar</i>
        </h4> 

        <div class="descrição">
            </br>
            <p>
                O leitor logo descobrirá que este livro, quaisquer que sejam suas deficiências, foi escrito para ele. Seu esforço para ser claro e breve, sua aversão ao jargão filosófico, sua antipatia por uma exibição 
                bibliográfica desanimadora e geralmente inútil, tudo isso provém do desejo de ajudar em vez de deslumbrar. Este livro é destinado a mentes comuns — igualmente distantes da genialidade, que desconhece obstáculos,
                e da estupidez, que vê tudo como obstáculo. Pressupõe vidas comuns, com suas possibilidades e dificuldades. Seu assunto é a produção do pensamento, e todos os seus capítulos partem do princípio de que somos honestos 
                em nosso desejo de produzir pensamentos não adulterados. Ele não tem como produzir um desejo de pensar onde este não existe, mas, havendo o germe indispensável, proverá as condições para fazê-lo amadurecer.
            </p>
            </br>
            </br>
            <p><b>Sobre o autor: </b></p>
           
            </br>
            </br>
            <p>
                Ernest Dimnet (1866–1954) foi escritor e sacerdote católico francês. Ordenado em 1903, foi cônego da Catedral de Cambraia, no norte da França, e professor de inglês no Colégio Stanislas de Paris. Em 1898 começou a escrever
                para publicações inglesas, como o “The Saturday Review”, sendo, segundo o amigo Hilaire Belloc, “um dos raros homens que se tornaram perfeitos mestres numa língua estrangeira”. Depois da Primeira Guerra Mundial, mudou-se para
                os eua, e deu conferências em Harvard e no Williamstown Institute of Politics. É autor, entre outros títulos, de “La Pensée catholique dans l’Anglaterre contemporaine” (1906), “France Herself Again” (1914), “From a Paris Balcony”
                (1924), e de uma autobiografia em dois volumes, “My Old World” (1935) e “My New World” (1938). “A arte de pensar”, publicado em inglês em 1928 e em francês no ano seguinte, foi um dos livros mais populares da década de 1930.

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