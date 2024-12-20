<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style_perfil.css">
    <link rel="stylesheet" href="style_geral.css">

    <style>
      @import url("https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap");
    </style>

    <title>Perfil</title>
  </head>
  <body class="jetbrains-mono-font">
    <header class="main-frame">
      <h1 id="title-main" class="center">Perfil</h1>
    </header>
    <nav class="main-frame">
      <ul id="nav-links">
        <li><a href="index.html" id="nav-link-1" class="nav-link link">Página Inicial</a></li>
        <li><a href="login.php" id="nav-link-2" class="nav-link link">Login</a></li>
        <li><a href="perfil.php" id="nav-link-3" class="nav-link link link-active">Perfil</a></li>
      </ul>
    </nav>
    <main class="main-frame">
      <h2>Seu Perfil:</h2>
      <br>
      <?php
        if (isset($_POST['name'])){
          echo "<h3>Bem Vindo, <u>".$_POST['name']."</u>!</h3>";
        }else{
          echo "<h3>Logue para entrar no seu perfil!</h3>";
        }
      ?>
      
      <br>
      <h3>Abaixo Temos uma Lista de Temas Recomendados para Você!</h3>
      <br>
      <ul id="list-themes">
        <li><a href="">Claro</a></li>
        <li><a href="">Escuro</a></li>
        <li><a href="">Azulado</a></li>
      </ul>
      <br>
      <h3>Caso Queira <span id="exit">Sair</span> de Sua Conta, Clique no Botão Abaixo!</h3>
      <br>
      <button type="button" id="button-exit" onclick="sair()">Sair</button>
    </main>



    <footer class="main-frame">
      <p id="p-footer">
        Feito por: <i>Vinícius Augusto</i> e <i>Gabriel Felipe</i><br>
        <span id="span-footer">Site Desenvolvido para <strong>Avaliação</strong> da Matéria de <strong>Aplicações Para Web</strong> do 4° Bimestre do Ano de <strong>2024</strong></span>
      </p>
    </footer>
    <script src="script_perfil.js"></script>
  </body>
</html>
