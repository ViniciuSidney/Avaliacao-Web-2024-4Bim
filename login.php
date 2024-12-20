<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="style_geral.css">

    <style>
      @import url("https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap");
    </style>

    <title>Login</title>
  </head>
  <body class="jetbrains-mono-font">
    <header class="main-frame">
      <h1 id="title-main" class="center">Login</h1>
    </header>
    <nav class="main-frame">
      <ul id="nav-links">
        <li><a href="index.html" id="nav-link-1" class="nav-link link">Página Inicial</a></li>
        <li><a href="login.php" id="nav-link-2" class="nav-link link link-active">Login</a></li>
        <li><a href="perfil.php" id="nav-link-3" class="nav-link link">Perfil</a></li>
      </ul>
    </nav>
    <main class="main-frame">
      <h2>Faça Login Aqui:</h2>
      <br>
      <form action="perfil.php" method="POST" onsubmit="return login()">
        <label for="name">Usuário:</label><br>
        <input type="text" id="name" name="name" size="16" maxlength="16" placeholder="Seu usuário" title="Apenas letras!" autofocus required>
        <br>
        <label for="pwd">Senha:</label><br>
        <input type="password" id="pwd" name="pwd" minlength="8" placeholder="Sua senha" title="É necessário ter pelo menos 8 caracteres" required>
        <br>
        <input type="reset" value="Resetar">
        <input type="submit" value="Enviar" >
        <br>
        <p id="p-message"></p>
      </form>
    </main>

    <footer class="main-frame">
      <p id="p-footer">
        Feito por: <i>Vinícius Augusto</i> e <i>Gabriel Felipe</i><br>
        <span id="span-footer">Site Desenvolvido para <strong>Avaliação</strong> da Matéria de <strong>Aplicações Para Web</strong> do 4° Bimestre do Ano de <strong>2024</strong></span>
      </p>
    </footer>
  </body>
  <script src="script_login.js"></script>
</html>
