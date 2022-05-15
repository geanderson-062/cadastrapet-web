<?php

//incluindo arquivo de conexao 
include "../controller/conexao.php";

//pegando o id 
$idADM= $_GET ['idADM']?? '';

//selecionando a tabela 
$sql= "SELECT * FROM `administrador` WHERE idADM = $idADM";

//colocando vareaveis para editar
$dados = mysqli_query($conexao , $sql);
$linha = mysqli_fetch_assoc($dados);

?>

<!DOCTYPE html>
<html lang="PTBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
   <link rel="manifest" href="../assets/img/favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#00a000">
   <meta name="msapplication-TileImage" content="../assets/img/favicon/ms-icon-144x144.png">
   <meta name="theme-color" content="#00a000">
   <!--favicon-->

</head>
<body>

  <nav class="navbar navbar-light corPrimaria">
    <div class="container-fluid">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-2 text-white" href="#">
         <img src="../assets/img/imgHome.png" alt="" width="50" height="50">
         Cadastrapet </a>
    </div>
</nav>

<div>
   <br>
</div>

 <section class="container corPrimaria" style="max-width: 400px; border-radius: 5px;">
   <form method="post" action="cadastra_administrador.php">
    <br>   
     <p class="fs-2 text-white text-center">Atualizar cadastro</p>

     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
     <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_j0xeoest.json"  background="transparent"  speed="1" loop  autoplay></lottie-player>

      <div class="mb-3">
        <label for="nome" class="form-label text-white">Email:</label>
        <input required name="nome" type="email" class="form-control" id="nomeADM" aria-describedby="emailHelp" placeholder="Ex: José Marcones Lira" autofocus>    
      </div>
  
      <div class="mb-3">
        <label for="senha" class="form-label text-white">Senha:</label>
        <input required name="senha" type="password" class="form-control" id="floatingPassword" aria-describedby="emailHelp" placeholder="Ex: 123marcones321">
      </div>

      <div class="checkbox mb-3 text-white text-center">
        <label>
          <input type="checkbox" value="remember-me" onclick="mostrarOcultarSenha()"> Exibir Senha
        </label>
      </div>
    
     <div class="d-grid gap-2 col-6 mx-auto">

       <input type="submit" class="btn btn-primary"  name="submit" id="submit" type="submit" value="Atualizar">
        
     </div>
    <br>  
   </form>
 </section>

<div>

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   
</div>

<!--preloader-->

<div class="overlay">
  <div class="loader"></div>
</div>
<script src="../assets/js/preloader.js"></script> 
<link rel="stylesheet" href="../assets/css/preloader.css">

<!--preloader-->

<footer class="corPrimaria">

  <br>
  <p class="text-center text-white">© 2022 Cadastrapet Company, Inc</p>
  <p class="text-center text-white">Sistema web desenvolvido por Geanderson Ferreira & Viviane Raquel <br><br>
    <a href="Termos_de_uso.html" class="text-center text-white">Politica de Privacidade</a>
  </p>
  
  <br>

</footer>

    <script src="../assets/js/exibir_senha.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>