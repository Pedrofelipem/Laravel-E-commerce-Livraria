@extends('template')

@section('titulo', 'Mestres do capitalismo')

@section('conteudo_principal')
      
    <div class="conteiner-livro"> 
        <div class="conteudo1">
            <p><a href="{{url('https://www.facebook.com/NandoMouraOficial')}}" target="_blank">Nando Moura</a>, <a href="https://ecclesiae.com.br/index.php?route=product/author&author_id=4339" target="_blank">Ramiro Gomes Ferreira</a><p>
            </br>
            <h1 id="cont">Mestres do capitalismo</h1>
            </br>
            <p id="cont-preço"><strike>R$49,90</strike></p>
            <p id="cont-preço">R$<b id="valor">22,46</b> <i id="tag-i">-55%</i></p>
        </div>
            <img id=imagem src="{{url('assets/imagens/img-capita.jpg')}}" alt="imagem">
        <div class="ico-comprar">
            <p id="ico-cari1"><a id="a-color" href="#">COMPRAR</a></P>
            <p id="ico-cari2"><a id="b-color" href="#">ADICIONAR AO CARRINHO</a></p>
        </div> 
    </div>

    <div class="descrip">
        <div class="item-detalhe">
            <label>Páginas</label>
            <span>280</span>
        </div>
        <div class="item-detalhe">
            <label>Idiomas</label>
            <span id="span1">Português</span>
        </div> 
        <div class="item-detalhe">
            <label>ISBN</label>
            <span id="span1">9786580136124</span>
        </div> 
        <div class="item-detalhe">
            <label>Medida</label>
            <span id="span1">16 x 23 cm</span>
        </div> 
        <div class="item-detalhe">
            <label>Editora</label>
            <span>Auster</span>
    </div>
    <div class="sinopse">
        <h4>
            Sinopse <i id="titulo">Mestres do capitalismo</i>
        </h4> 

        <div class="descrição">
            </br>
            <p>
                Há pessoas muito competentes em suas áreas que, apesar disso, não sabem como ganhar <b>dinheiro</b>. Não sabem gerir 
                suas finanças e são incapazes de empreender. Foram treinadas pela escola apenas para obedecer. Não aprenderam o <b>valor</b> real das coisas, 
                mas apenas os <b>números</b>, essa idéia abstrata. O povo brasileiro está absolutamente defasado em relação ao poder financeiro por pura falta de conhecimento.
                Contudo, é verdade que ir atrás de informações sobre esse assunto é complicado: os livros são muito técnicos, e nenhum apresenta um encadeamento lógico que esclareça, 
                de uma só vez, como eliminar dívidas, como organizar o seu patrimônio, como geri-lo, como multiplicá-lo e, por fim, como investi-lo. 
                E se houvesse um livro que partisse dos princípios da gestão financeira até chegar à complexidade dos investimentos, em que tudo isso estivesse praticamente pronto, 
                mastigado, para aquela pessoa que tem vontade de aprender? Eis o <b>MESTRES DO CAPITALISMO</b>.
            </p>
            </br>
            <p>
                “O MESTRES DO CAPITALISMO tem uma conexão muito grande com a cultura que foi produzida no meu canal, e é uma comunicação direta com quem procura novos caminhos, 
                novas perspectivas para uma nova vida. Na verdade, ele é um resumo da minha própria vida: um espaço onde divido conhecimento com as pessoas. [...] A única coisa que transforma
                a realidade dos homens é o conhecimento. A única coisa que nos libertou, no Brasil, de uma época de burrice, cretinice, imundice, roubo e canalhice, para termos ao menos alguma 
                esperança, foi o conhecimento. E é disso que trata o MESTRES DO CAPITALISMO”. 
            </p>
            </br>
            <p>— Nando Moura</p>
            </br>
            <p>SOBRE OS AUTORES:</p>
            </br>
            <p>
                RAMIRO GOMES FERREIRA (1992–) nasceu em Porto Alegre. Formou-se em Ciências Contábeis pela UFRGS em 2014. Desde pequeno apaixonado pelo mercado financeiro, comprou sua primeira ação 
                aos 12 anos e começou a trabalhar no mercado financeiro aos 19. Trabalhou como analista “buy-side” em um fundo de investimentos em ações por 3 anos. Fundou em 2016, com Bruno Strack,
                a plataforma <b>Clube do Valor</b>, onde disponibiliza conteúdo de finanças pessoais e investimentos para proporcionar mais tranqüilidade financeira às pessoas, e a gestora de recursos AGM Brasil,
                responsável pela gestão de carteiras administradas de investimentos. Do início das empresas até agora, mais de 15 milhões de brasileiros já consumiram algum conteúdo gratuito do Clube do Valor.
                O curso MESTRES DO CAPITALISMO, em parceria com o canal do Nando Moura, teve início em 2018 e já está na segunda edição, totalizando mais de 12,5 mil alunos.
            </p>
            </br>
            <p>
                NANDO MOURA (1984–) nasceu em São Paulo. Começou a dar aulas de música aos 16 anos. Estudou posteriormente com Kiko Loureiro, Luís Stelzer, Eduardo Ardanuy, Joe Moghrabi, Miguel Laprano e outros, 
                além de ter se formado no Conservatório Souza Lima e na Faculdade de Rotterdam. Atuou também como compositor, guitarrista, vocalista, técnico e produtor musical. Em 2014 deu início ao seu canal no 
                YouTube fazendo crítica cultural, especialmente ao funk e ao sertanejo, e comentários políticos. Já promoveu ali diversos projetos, como o CURSO DE INGLÊS JUNIOR SILVEIRA, o BRASIL PARALELO, a MASTER
                CLASS NANDO MOURA e, em parceria com os analistas do Clube do Valor, o MESTRES DO CAPITALISMO. O canal conta atualmente com mais de 3 milhões de inscritos.
            </p>
            </br>
            </br>
            </br>
            <div>
                <b>Ficha Técnica:</b>
                </br>
                <ul>
                    <li>ISBN: 9786580136124</li>
                    <li>Editora: Auster</li>
                    <li>Dimensões: 16 x 23 cm</li>
                    <li>Idioma: Português</li>
                    <li>Páginas: 280</li>
                </ul>
            </div>
        </div>
    </div>

@endsection