<!DOCTYPE html>
<html lang="pt-br">

            <head>
            <meta charset="UTF-8">
            <title>Brub's Contato</title>
            <link rel="stylesheet" href="{{ asset('css/contato.css') }}"/>
            <link rel="stylesheet" href="{{ asset('css/reset.css') }}"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
    </head>

    <body>
        <header>
            <div class="caixa">
              <h1><a href="home.html"><img class="logo"  src="{{ asset('images/logo.png') }}" alt="Logo brub's"></a></h1>
              <nav>
                   <ul class="NavBar"> 
                        <li><a href="{{ route('Pagina_De_Home')}}">Home</a></li>
                        <li><a href="{{ route('Pagina_De_Produtos')}}">Produtos</a></li>
                        <li><a href="{{ route('Pagina_De_Contato')}}">Contato</a></li>
                   </ul>
               </nav>
            </div> 
         </header>
     <main>
            <form>
                 <label for="nomecompleto" class="formulário">Nome completo:</label>
                 <input type="text" id="nomecompleto"class="formulário_text" placeholder="Seu nome completo" required>

                 <label for="email" class="formulário">Email:</label>
                 <input type="email" id="email"class="formulário_text" placeholder="seuemail@ficticio.com" required>

                 <label for="telefone" class="formulário">Whatsapp:</label>
                 <input type="tel" id="telefone"class="formulário_text" placeholder="DDD + Telefone" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
                 <small>Format: 12 91223-7889</small>

                 <label for="mensagem">Mensagem:</label>
                 <textarea cols="28" rows="15" id="mensagem" placeholder="Insira aqui seu pedido em detalhes" required></textarea>
                 
                <fieldset>

                     <legend class="texto_caixa_de_Selecao"> Qual o melhor meio de contato para você?</legend>    
                     
                     <label for="radio-email"><input type="radio" name="contato" value="E-mail" class="opcoes">E-mail</label>
                     
                     <label for="radio-nomecompleto"> <input type="radio" name="contato" class="opcoes" value="Nome_completo" >Nome completo</label>
                     
                     <label for="radio-telefone"><input type="radio" name="contato" value="Whatsapp" class="opcoes" checked> Whatsapp</label> <!a tag name serve para definir uma "classe" para o type "radio" assim as caixas de seleção não podem ser selecionadas mais de uma vez>
                     
                </fieldset>
        
            
            <p class="texto_caixa_de_Selecao">Escolha o horário</p>
            <select>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
            </select>
            
            <label for=""><input type="checkbox" class="texto_caixa_de_Selecao" checked> Quer receber as novidades por e-mail?</label>

            <input type="submit" value="Criar conta" class="formulário_envio" >
        </form>
        <table>
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Segunda</td>
                    <td>8h ~ 20h</td>
                </tr>
                <tr>
                    <td>Quarta</td>
                    <td>8h ~ 20h</td>
                </tr>
                <tr>
                    <td>Sexta</td>
                    <td>8h ~ 20h</td>
                </tr>
            </tbody>
        </table>

    </main>

         <footer>
            <p> &copy; Copyright Brub's - 2021</p>
        </footer>
    </html>