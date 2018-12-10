<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pi.css')}}">
    <meta charset="utf-8">
    <title>ILLEGAL BEER BRASIL</title>
  </head>
  <body>
    <div class="topnav">
      <div class="botoes-total">
  <a class="botoes" href="sobre-integrador.html">Sobre nós</a>
  <a class="botoes" href="contact-integrador.html">Contato</a>
  <a class="botoes" href="products-integrador.html">Nossos Produtos</a>
  <a class="botoes" href="proj-integrador.html">Home</a>
</div>
  <div class="login-container">
      <a class="login-entrar" href="#about">Entrar</a>
      <button type="submit">Cadastre-se</button>
    </div>
</div>

<div class="contato">
    <form action="/pagina-processa-dados-do-form" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" />
    </div>
    <div>
        <label for="msg">Mensagem:</label>
        <textarea id="msg"></textarea>
    </div>

  </div>

  <img class="fundo-paginas" src="images/texture.jpg" style="height:1000px">

</form>





  </body>
</html>
