<?php
require_once 'conexaobiko.php'; // conexão

session_start();

if(isset($_POST['btn-enviar'])):
    $erros = array();
    $login = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

if(empty($login) or empty($senha)):
    $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
else:
    $sql = "SELECT Email FROM clientesbiko WHERE Email = '$login' ";
    $resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0):
    $senha =md5($senha);
    $sql = "SELECT * FROM clientesbiko WHERE Email = '$login' AND Senha ='$senha' ";
    $resultado = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resultado) == 1):
        $dados = mysqli_fetch_array($resultado);
        mysqli_close($conn);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id_cliente'];
        header('Location: TelaInicialLogado.html');
    else:
        $erros[] = "<li> Usuário e senha não conferem </li>";
    endif;

else:
    $erros[] = "<li> Usuario não cadastrado </li>";
endif;
endif;
endif;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Tela Login</title>
<style>
body{
font-family: Helvetica, Arial, sans-serif; /*Define fonte de texto*/
background-image: url("http://127.0.0.1:8080/teste/Bootstrap_Tela_cadastro/Imagens_Biko/green-background-wallpaper-3.jpg");
}

.margem{
    margin-left: 470px;
    border-radius: 4px;
    width: 400px;
    height: 300px;
    justify-content: center;

}
.margem2{
  
  margin: 10px;
}

</style>

</head>
<body>
    <nav class=" sticky-top navbar navbar-expand-lg navbar-light " style="background-color: rgb(230, 230, 230)">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="TelaInicial.html"> <b>INICIO </b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              </svg> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="FaleConosco.html"><b>CONTATOS </b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
              </svg></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Sobrenos.html"><b>O QUE É O BIKO? </b> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                  </svg></a>
              </li>
          </ul>
        </div>
</nav>
<br>

<form class="margem align-self-center" style="background-color: rgb(230, 230, 230);" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
  <div class="form-row margem2"> <!--Primeira div-->
    <div class="col-md-10 mb-3">
      <label for="validationDefault02">E-mail</label>
      <input type="email" name="email" class="form-control" id="validationDefault02" required>
    </div>
  </div>
  <div class="form-row margem2"> <!--Segunda div-->
    <div class="col-md-10 mb-3">
      <label for="validationDefault04">Senha</label>
      <input type="password" name="senha" class="form-control" maxlength="14" id="validationDefault11" required>
    </div>
  </div>
  <div class="form-group margem2"> <!--Terceira div-->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
      <label class="form-check-label" for="invalidCheck2">
        Manter conectado
      </label>
    </div>
  </div>
  <button class="btn btn-primary margem2" name="btn-enviar" type="submit">Entrar</button>

</form>
 
</body>
</html>