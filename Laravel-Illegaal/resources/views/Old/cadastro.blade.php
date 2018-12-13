<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="cadastro" method="post" id="cadastro">
    @csrf
      Nome:<br>
      <input type="text" name="nome" value=""><br>
      Email:<br>
      <input type="email" name="email" value=""><br>
      Senha:<br>
      <input type="password" name="senha" value="" id="senha"><br>
      Repetir Senha:<br>
      <input type="password" name="senha2" value="" id="senha2"><br>
      <input type="checkbox" name="aceito" value="1"> Aceito os termos<br>
      <input type="submit" name="submit" value="Enviar">
    </form>
    <script type="text/javascript">


       let form = document.getElementById("cadastro");
       form.onsubmit = function(event) {
        event.preventDefault();
         let erros = [];
         let checked = {};
         for(let i=0; i<this.elements.length; i++){
            let element = this.elements[i];
            console.log(element, element.type, element.value);
            switch(element.type){
              case "submit":
              break;
              case "checkbox":
              case "radio":
                checked[element.name] = checked[element.name] || element.checked;
              break;
              default:
                if(element.value == ""){
                  erros.push(element.name+" está em branco!");
                }
              break;
            }
          }

         if(this.elements.senha.value != this.elements.senha2.value){
           erros.push("Senhas não conferem");
         }

         if(erros.length > 0){
            alert("Corrija os seguintes erros:\r-"+erros.join("\r-"));
            event.preventDefault();
            return false;
         }
       }

       </script>
  </body>
</html>
