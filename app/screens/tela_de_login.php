<?php 

     //seção iniciada
     session_start();
     
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

<link rel="stylesheet" href="../assets/css/login.css">
<link rel="stylesheet" href="../assets/css/style.css">

  </head>
  <body>

<main class="form-signin text-center corPrimaria"  style="max-width: 400px; border-radius: 5px;">

  <form action="../controller/login.php" method="POST" >

    <img class="mb-4" src="../assets/img/imgHome.png" alt="" width="54" height="54">

    <h1 class="h3 mb-3 fw-normal text-white">Entrar</h1>

    <div class="form-floating">
      <input required name="email" type="text" class="form-control" id="floatingInput" placeholder="Ex = 122.208.404.09">
      <label for="floatingInput">Usuário</label>
    </div>
<div>
<br>
</div>
    <div class="form-floating">
      <input required name="senha" type="password" class="form-control" id="floatingPassword"  placeholder="Ex = 123ola321">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3 text-white">
      <label>
        <input type="checkbox" value="remember-me" onclick="mostrarOcultarSenha()"> Exibir Senha
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    
    <p class="mt-5 mb-3 text-white">©2022 Cadastrapet Company, Inc</p>
    <a style="text-decoration: none;" class="text-white" href="../assets/document/termos de politica e privacidade.pdf">Politica de Privacidade</a>
    <br>
  </form>

</main>

<!--preloader-->

<div class="overlay">
  <div class="loader"></div>
</div>
<script src="../assets/js/preloader.js"></script> 
<link rel="stylesheet" href="../assets/css/preloader.css">
<!--preloader-->

<script src="../assets/js/exibir_senha.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>
