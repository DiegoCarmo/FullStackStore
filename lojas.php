<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="index.css" />
  <title>FullStack Store</title>
  
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
  
  <!--   MENU -->
  <?php
  include("menu.html");
  ?>

  <!--   endereços -->
<div class="text-white">
  <div class="bgrio"> <h3>Rio de Janeiro</h3></div>
    <div class="enderecos">
      <p>Avenida vargas, 100</p>
      <p>10 &ordm; andar</p>
      <p>Centro</p>
      <p>(21) 2222-2222</p>
    </div>
  

  <div class="bgsp"><h3>São Paulo</h3></div>
    <div class="enderecos">
      <p>Avenida Paulista, 200</p>
      <p>10 &ordm; andar</p>
      <p>Centro</p>
      <p>(30) 3333-3333</p>
  </div>


  <div class="bgfortaleza"><h3 class="text-white">Fortaleza</h3></div>
    <div class="enderecos">
      <p>Avenida Céara, 136</p>
      <p>20 &ordm; andar</p>
      <p>Centro</p>
      <p>(88) 4444-4444</p>
    </div>
</div>

<?php
include("footer.html")
?>
</body>

</html>