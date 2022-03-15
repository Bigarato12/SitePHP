<!DOCTYPE html>

<html lang="pt-br">
      <head>
            <meta charset="UTF-8">
            <title>Brub's</title>
            <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
            <link rel="stylesheet" href="{{ asset('css/reset.css') }}"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>   
        <header>
            <div class="caixa">
              <h1><a href="home.html"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo brub's"></a></h1>
              <nav>
                 <ul class="NavBar">
                        <li><a href="{{ route('Pagina_De_Home')}}">Home</a></li>
                        <li><a href="{{ route('Pagina_De_Produtos')}}">Produtos</a></li>
                        <li><a href="{{ route('Pagina_De_Contato')}}">Contato</a></li>
                    </ul>
                </nav>
            </div> 
        </header>   
            
        <img id = "Banner"  src="{{ asset('images/barbeiro.jpg') }}" alt="Imagem de entrada">

<div class="Principal">
    <h2 class="titulo-centralizado">Sobre a Brub's</h2> 
    
     <p>Com sua recém chegada no mundo dos negócios a <strong>Brub's</strong> traz para o mercado o que há de melhor para o seu paladar. Fundada em 2021, a Brub's traz as melhores e maiores novidades no mundo dos bolos!</p>
    
     <p>Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.</p>
    
    </div>
        
    <div class="Benefícios"> 
        <h3 class="titulo-centralizado">Produtos</h3>

        <ul> 
           <li class="itens">Bolos</li>
            <li class="itens">Bolos de pote</li>
            <li class="itens">Doces</li> 
            <li class="itens">Salgados</li> 
        </ul>
    </div>
          
    </body>
    <footer>
        <p> &copy; Copyright Brub's - 2021</p>
    </footer>
 </html>


