<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>
      @charset "UTF-8";

      * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      .carousel-inner img {
        height: 500px;
        object-fit: cover;
      }

      .footer {
        background-color: #0f0f0f;
        color: #ffffff;
        padding: 40px 0;
      }
      .footer a {
        color: #ffffff;
        text-decoration: none;
      }
      .footer a:hover {
        color: #d6d6d6;
        text-decoration: underline;
      }
      .footer .social-icons a {
        margin-right: 15px;
        font-size: 24px;
      }
      .footer .social-icons a:hover {
        color: #d6d6d6;
      }
      .footer .newsletter input[type="email"] {
        border: none;
        border-radius: 0;
        padding: 10px;
        width: 75%;
      }
      .footer .newsletter button {
        border-radius: 0;
        padding: 10px;
        background-color: #dc3545;
        border: none;
        color: #ffffff;
      }
      .footer .newsletter button:hover {
        background-color: #c82333;
      }

      #logofooter {
        width: 100px;
        height: 100px;
      }

      #botaomenu {
        width: 50px;
        height: 50px;
      }
      
      #titulo{
        font-weight: lighter;
        font-style: italic;
        color: #c82333;
      }

      #header {
        background-color: #181818;
      }

      .card {
        background-color: rgb(128, 128, 128);
      }

      .links {
        text-decoration: none;
        color: white;
        font-weight: 200;
        margin: 5px;
        margin-top: 20px;

        display: flex;
        flex-direction: row;
      }

      .imgmenu {
        width: 30px;
        height: 30px;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-dark text-white link-light p-3">
        <div class="row">
            <div class="col text-start">
                <strong>Cinephile</strong>
            </div>
            <div class="col text-end">
              <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "Bem vindo, $nome | ";
                      if($nivel == 'adm'){
                        echo "<a href='../adm/adm.php'> Admin </a> | ";
                      }
                      echo "<a href='/trabalhojeanny/adm/logout.php'> Logout </a>";
                  }else{
                    echo"
                        <a href='/trabalhojeanny/adm/login.php'> LOGIN </a> |
                        <a href='/trabalhojeanny/usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </div>
        </div>
    </div>