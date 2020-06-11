<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style_login.css')}}">
    <link rel="icon" type="imagem/jpg" href="{{url('assets/imagens/icone.jpg')}}">
    <title>Login Livraria</title>
</head>
<body>
    
    <!-- Erro de login-->
    @if(session('alerta'))
        <div class="alerta">
            <b>Oh não!</b> {{session('alerta')}}
        </div>
    @endif
    <!--Sucesso cadastro-->
    @if(session('mensagem'))
        <div class="alerta2"
            <h2>{{session('mensagem')}}</h2>
        </div>
    @endif
    <!--Formulário Login-->
    <div class="Conteiner">      
        <section >
            <form action="{{('home')}}" method="post" > 
                @csrf
                <h1>Login</h1> 
                <p> 
                    <label for="email_login">Seu e-mail</label>
                    <input id="email_login" name="email_login" type="email" placeholder="Ex: Pedrofelipe@gmail.com"/>  
                </p>
                <p>
                    <label for="senha_login">Sua senha</label>
                    <input id="senha_login" name="senha_login"  type="password" placeholder="Ex: 123456"/>
                </p>  
                
                <p> 
                    <input type="submit" value="Acessar"/>
                </p>
                
                <p class="btn-cadastro">
                    Ainda não possui uma conta?
                    <a href="{{route('cadastro')}}">Cadastre-se</a>
                </p>
                <br>
                <a href="{{route('home')}}">Entrar sem fazer login</a>
            </form>
        </section>
    </div> 
</body>
</html>