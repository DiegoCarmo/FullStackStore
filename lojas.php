<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="index.css" />
  <title>FullStack Store</title>
</head>

<body>
  <div class="imagem01">
    <a href="index.php">
      <img src="imagens/box logo.png" class="boxlogo" /></a>
  </div>

  <!--   MENU -->
  <?php
  include("menu.html");
  ?>

  <!--   endereços -->
  <div class="bgrio" id="bgefeito" onmouseover=(destaque())>
    <div class="enderecos">
      <h3>Rio de Janeiro</h3>
      <hr />
      <p>Avenida vargas, 100</p>
      <p>10 &ordm; andar</p>
      <p>Centro</p>
      <p>(21) 2222-2222</p>
    </div>
  </div>

  <div class="bgsp">
    <div class="enderecos">
      <h3>São Paulo</h3>
      <hr />
      <p>Avenida Paulista, 200</p>
      <p>10 &ordm; andar</p>
      <p>Centro</p>
      <p>(30) 3333-3333</p>
    </div>
  </div>
  <div class="bgfortaleza">
    <div class="enderecos">
      <h3>Fortaleza</h3>
      <hr />
      <p>Avenida Céara, 136</p>
      <p>20 &ordm; andar</p>
      <p>Centro</p>
      <p>(88) 4444-4444</p>
    </div>
  </div>
</body>

</html>