<?php
    include("conexaobiko.php");
    $servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $result_pesquisa = "SELECT * FROM autonomos WHERE Servico LIKE'%$servico%' and Cidade LIKE'%$cidade%' and Estado LIKE '%$estado'";
    $resultado_pesquisa = mysqli_query($conn, $result_pesquisa);



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Tela de Serviços</title>
<style>
body{
font-family: Helvetica, Arial, sans-serif; /*Define fonte de texto*/
}
.margem{
    margin: 10px;
    border-radius: 4px;
    
    
}

</style>

</head>
<body>
    <nav class=" sticky-top navbar navbar-expand-lg navbar-light " style="background-color: rgb(230, 230, 230)">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="TelaInicialLogado.html"> <b>INICIO </b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              </svg> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="FaleConoscoLogado.html"><b>CONTATOS </b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
              </svg></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="SobrenosLogado.html"><b>O QUE É O BIKO? </b> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                  </svg></a>
              </li>
          </ul>
        </div>
</nav>
<br>

    <form class="margem" style="background-color: rgb(230, 230, 230);" method="POST"  >
        <div class="form-row margem"> <!--Primeira div-->
        <div class="col-md-6 mb-3">
        <label for="validationDefault18">Tipo de serviço</label>
        <select class="custom-select" name="servico" id="validationDefault18" >
          <option selected disabled value="">Selecione...</option>
          <option value="Babá">Babá</option>
          <option value="Beleza e Estética">Beleza e Estética</option>
          <option value="Coach">Coach</option>
          <option value="Computação">Computação</option>
          <option value="Costura e reparos">Costura e reparos</option>
          <option value="Cuidador de pets">Cuidador de pets</option>
          <option value="Desenvolvedor">Desenvolvedor</option>
          <option value="Designer Gráfico">Designer Gráfico</option>
          <option value="Eletricista">Eletricista</option>
          <option value="Fotografia">Fotografia</option>
          <option value="Limpeza doméstica">Limpeza doméstica</option>
          <option value="Manutenção doméstica">Manutenção doméstica</option>
          <option value="Marketing digital">Marketing digital</option>
          <option value="Pedreiro">Pedreiro</option>
          <option value="Professor particular">Professor particular</option>
          <option value="Segurança">Segurança</option>    
        </select>
      </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02">Cidade de preferência</label>
            <input type="text" name="cidade" class="form-control" id="validationDefault02"  >
          </div>
        </div>
        <div class="form-row margem"> <!--Segunda div-->
          <div class="col-md-3 mb-3">
            <label for="validationDefault08">Estado</label>
            <select class="custom-select" name="estado" id="validationDefault08" >
              <option selected disabled value="">Selecione...</option>
              <option value="Acre">AC</option>
                  <option value="Alagoas">AL</option>
                  <option value="Amapá">AP</option>
                  <option value="Amazonas">AM</option>
                  <option value="Bahia">BA</option>
                  <option value="Ceará">CE</option>
                  <option value="Espírito Santo">ES</option>
                  <option value="Goiás">GO</option>
                  <option value="Maranhão">MA</option>
                  <option value="Mato Grosso">MT</option>
                  <option value="Mato Grosso do Sul">MS</option>
                  <option value="Minas Gerais">MG</option>
                  <option value="Pará">PA</option>
                  <option value="Paraíba">PB</option>
                  <option value="Paraná">PR</option>
                  <option value="Pernambuco">PE</option>
                  <option value="Piauí">PI</option>
                  <option value="Rio de Janeiro">RJ</option>
                  <option value="Rio Grande do Norte">RN</option>
                  <option value="Rio Grande do Sul">RS</option>
                  <option value="Rondônia">RO</option>
                  <option value="Roraima">RR</option>
                  <option value="Santa Catarina">SC</option>
                  <option value="São Paulo">SP</option>
                  <option value="Sergipe">SE</option>
                  <option value="Tocantins">TO</option>
                  <option value="Destrito Federal">DF</option>
            </select>
          </div>
        </div>
        <button class="btn btn-primary margem" type="submit">Procurar</button>
      </form>
<br>
<div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Serviço</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col"></th>
            
            
            
          </tr>
        </thead>
        <tbody>
        <?php while($rows_pesquisa = mysqli_fetch_assoc($resultado_pesquisa)){ ?>
								<tr>
									<td><img src="http://127.0.0.1:8080/teste/Bootstrap_Tela_cadastro/Imagens_Biko/17004.png" alt="some text" width="40px" height="40px"></td>
                  <td><?php echo $rows_pesquisa['Nome']; ?></td>
                  <td><?php echo $rows_pesquisa['Servico']; ?></td>
									<td><?php echo $rows_pesquisa['Cidade']; ?></td>
									<td><?php echo $rows_pesquisa['Estado']; ?></td>
									<td>
                  <a href="Autonomo.php?id=<?php echo $rows_pesquisa['id']; ?>" name ="btn-Escolher"  type=submit  class="btn btn-primary">visualizar</a>
									</td>
								</tr>
							<?php } ?>
        </tbody>
      </table></div>




</body>
</html>