<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../public/css/pi.css">
    <meta charset="utf-8">
    <title>ILLEGAL BEER BRASIL</title>
  </head>
  <body>
    <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Sobre nós</a>
  <a href="#contact">Contato</a>
  <a href="#contact">Nossos Produtos</a>
  <div class="login-container">
    <form class="form-login" action="/action_page.php">
      <input type="text" placeholder="Usuario" name="username">
      <input type="text" placeholder="Senha" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
<div class="w3-content w3-section" style="max-width:500px"> 
  <img class="beer" src="../public/images/beer.png" style="width:20%">
  <img class="beer-02" src="../public/images/beer-02.png" style="width:40%">
  <img class="div-01" src="../public/images/div-01.png" style="width:105%">
  <img class="slideshow" src="../public/images/cassel-01.png" style="width:380.8%">
  <img class="slideshow" src="../public/images/cassel-02.png" style="width:380.8%">
</div>

<div class="content">
     <a href="#" class="botao01">Saiba mais</a>
    </div>

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
