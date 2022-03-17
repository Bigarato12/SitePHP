<!DOCTYPE html>

<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Brub's Produtos</title>
            <link rel="stylesheet" href="{{ asset('css/produtos.css') }}"/>
            <link rel="stylesheet" href="{{ asset('css/reset.css') }}"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="caixa">
              <h1><a href="home.html"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo brub's"></a></h1>
              <nav>
                   <ul class="NavBar">  
                        <li><a href="{{ ro
                            ute('Pagina_De_Home')}}">Home</a></li>
                        <li><a href="{{ route('Pagina_De_Produtos')}}">Produtos</a></li>
                        <li><a href="{{ route('Pagina_De_Contato')}}">Contato</a></li>
                   </ul>
               </nav>
            </div> 
         </header>
         <main>
             <ul class="produtos">
                <li><h2>Bolo</h2>
                    <div class="imagem-produtos">
                        <img class="imagem-produtos" src="{{ asset('images/interrog.jpg') }}" alt="Card Back" >
                        <img src="{{ asset('images/bolo-aniversario-masculino-00.png') }}" class="img-top" alt="Card Front" >
                    </div>
                <p class="produto-desc">Sabor a escolha do cliente, olhe nosso cardápio e saiba as opções</p>
                <p class="produto-preço">R$ 15,00/unidade</p>
                </li> 
                <li><h2>Bolo de pote</h2>
            <div class="imagem-produtos">
                <img class="imagem-produtos" src="{{ asset('images/interrog.jpg') }}" alt="Card Back" >
                        <img src="{{ asset('images/bolo-de-pote.jpg') }}" class="img-top" alt="Card Front" >
            </div>
                <p class="produto-desc">Sabor a escolha do cliente, olhe nosso cardápio e saiba as opções</p>
                <p class="produto-preço">R$ 8,00/unidade</p>
                </li> 
                <li><h2>Doces</h2>
                    <div class="imagem-produtos">
                        <img class="imagem-produtos" src="{{ asset('images/interrog.jpg') }}" alt="Card Back" >
                                <img src="{{ asset('images/doces.jpg') }}" class="img-top" alt="Card Front" >
                    </div>
                    <p class="produto-desc">Opções a escolha do cliente, olhe nosso cardápio e saiba as opções</p>
                    <p class="produto-preço">R$ 50,00 </p>
                     <p id="unidades"> 100 unidades</p>
                </li> 
                <li><h2>Salgados</h2>
                    <div class="imagem-produtos">
                        <img class="imagem-produtos" src="{{ asset('images//interrog.jpg') }}" alt="Card Back" >
                                <img src="{{ asset('images/salgado-para-festa-kit-festa.jpg') }}" class="img-top" alt="Card Front" >
                    </div>
                    <p class="produto-desc"> Opções a escolha do cliente, olhe nosso cardápio e saiba as opções</p>
                    <p class="produto-preço">R$ 50,00 </p>
                     <p id="unidades"> 100 unidades</p>
                </li> 
             </ul>
              
         </main> 
    </body>
    <footer>
        <p> &copy; Copyright Brub's - 2021</p>
    </footer>
</html>