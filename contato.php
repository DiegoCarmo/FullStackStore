<!--      conectandoDB      -->
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "fullstack";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if (!$conexao) {
  die("Sem conexão" . mysqli_connect_error());
}
mysqli_set_charset($conexao, "utf8mb4");

if (isset($_POST['nome']) && isset($_POST['msg'])) {
  $nome = $_POST['nome'];
  $msg = $_POST['msg'];
  $sql = "insert into contato (nome, msg) values('$nome','$msg')";
  $resultado = $conexao->query($sql);
}
?>
<!--      conectandoDB fim      -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
 
  <title>FullStack Store</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" />
</head>

<body>
 
  <!--   MENU -->
  <?php
  include("menu.html");
  ?>


   <div class="social">
    <div>
      <a href="https://instagram.com" target="_blank"><img class="lgsocial" src="imagens/logos/instagram.png "></a>
      <a href="https://facebook.com" target="_blank" ><img class="lgsocial" src="imagens/logos/facebook.png " /></a>
      <a href="https://whatsapp.com" target="_blank"><img class="lgsocial" src="imagens/logos/whats.png " /></a>
    </div>
  </div>

  <div id="form">
    <form class="form-group" method="post" action="">
      <h1>Como podemos te ajudar ?</h1>
      <hr>

      <label for="pnome">Nome:</label><br />
      <input class="form-control" type="text" id="nome" name="nome" />
      <br />
      <br />
      <label class= "areaMsg">Mensagem:</label><br />
      <textarea class="form-control" name="msg" id="msg" rows="5"></textarea>
      <br /><br />

      <input class="d-inline" type="checkbox" name="checkbox" id="checkbox" />
      <label class="form-check-label d-inline" for="checkbox">Concordo com termos de segurança.</label>
      <br /><br />

      <input class="form-control btn btn-primary" type="submit" id="submit" style="width: 200px" />
      <br /><br />
    </form>
    


  <div>
    <?php
    $sql = "select * from  contato";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0) {
      while ($linha = $resultado->fetch_assoc()) {
        echo "Nome: ", $linha['nome'], "<br>";
        echo "Msg: ", $linha['msg'], "<br>";
        echo "<hr>";
      }
    } else {
      echo "nenhum comentario registrado!";
    }
    ?>
  </div>
</div>
     <?php
    include("footer.html");
    ?>

</body>

</html>