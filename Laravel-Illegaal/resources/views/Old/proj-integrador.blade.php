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
      <button type="submit" href="cadastro.html">Cadastre-se</button>

    </div>
</div>
<div class="w3-content w3-section" style="width:100%;">
  <img class="slideshow" src="{{ ('/images/cassel-01.png)}}" style="width:100%" style="height:600px">
  <img class="slideshow" src="{{ ('/images/cassel-02.png)}}" style="width:100%" style="height:600px">
  <img class="beer" src="{{ ('/images/beer.png)}}" style="width:20%">
  <img class="beer-02" src="{{ ('/images/beer-02.png)}}" style="width:40%">
  <img class="div-01" src="{{ ('/images/div-01.png)}}" style="width:100%">
  <div class="content">
       <a href="#" class="botao01">Saiba mais</a>
      </div>
</div>


<video class="video-2" controls autoplay>
  <source src="{{ ('/images/ILLEGAAL-2.mp4)}}" type="video/mp4">
</video>



<!-- <div class="midias-socias">
    <img class="insta" src="images/insta.png" style="width:3.5%">
    <img class="face" src="images/face.png" style="width:3.5%">
</div>
-->


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slideshow");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<div>

</div>
  </body>
</html>