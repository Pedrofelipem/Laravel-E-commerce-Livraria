<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style_cadastro.css')}}">
    <link rel="icon" type="imagem/jpg" href="{{url('assets/imagens/icone.jpg')}}">
    <title>Cadastro Livraria</title>
</head>
<body>
    <!--Formulário Cadastro-->     
        @if($errors->any())
        <div class="alerta">
            <b>Erro!</b>
            @foreach($errors->all() as $erro)
            <p>{{$erro}}</p>
            @endforeach
        </div>
        @endif
        <section class="Conteiner">
            <form action="{{route('salvarusuario')}}" method="post">
                @csrf 
                <h1>Cadastro</h1>      
                <p> 
                    <label for="nome_cad">Seu nome</label>
                    <input id="nome_cad" name="nome" type="text" placeholder="Ex: Pedro Felipe" />
                </p>     
                <p> 
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email"  type="email" placeholder="Ex: Mundial@gmail.com"/> 
                </p> 
                <p> 
                    <label for="numero_cad">Seu número</label>
                    <input id="numero_cad" name="numero"  type="number" placeholder="Ex: (00) 9.9999-9999"/> 
                </p> 
                <p>
                    <label for="cpf_cad">Seu cpf/cnpj</label>
                    <input id="numero_cad" name="cpf"  type="number" placeholder="Ex: 000.000.000-00"/>
                </p>
                <p>
                    <label for="cep_cad">Seu cep</label>
                    <input id="numero_cad" name="cep"  type="number" placeholder="Ex: 00000-000"/>
                </p>
                <p>  
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha"  type="password" placeholder="Ex: 123456"/>
                </p>     
                <p> 
                <input type="submit" value="Cadastrar-se"/> 
                </p>    
                <p class="btn-login">  
                    Já possui uma conta?
                <a href="{{route('login')}}">Ir para Login</a>
                </p>
            </form>
        </section>
</body>
</html>