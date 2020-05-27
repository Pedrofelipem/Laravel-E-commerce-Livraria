@extends('template')

@section('titulo', 'Livros')

@section('conteudo_principal') 
  
  
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



@endsection