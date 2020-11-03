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
  <link rel="stylesheet" href="index.css" />
  <title>FullStack Store</title>
</head>

<body>
  <div class="imagem01">
    <a href="index.php"> <img src="imagens/box logo.png" class="boxlogo" /> </a>
  </div>
  <!--   MENU -->
  <?php
  include("menu.html");
  ?>

  <div class="social">
    <div>
      <img class="lgsocial" src="imagens/logos/instagram.png " />
      <img class="lgsocial" src="imagens/logos/facebook.png " />
      <img class="lgsocial" src="imagens/logos/whats.png " />
    </div>
  </div>

  <div id="form">
    <form method="post" action="">
      <h1>Como podemos te ajudar ?</h1>
      <hr style="width: 50%;">

      <label for="pnome">Nome:</label><br />
      <input type="text" id="nome" name="nome" />
      <br />
      <br />
      <label for="areaMsg">Mensagem:</label><br />
      <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
      <br /><br />

      <input type="checkbox" name="checkbox" id="checkbox" />
      <label for="checkbox">Concordo com termos de segurança.</label>
      <br /><br />

      <input type="submit" id="submit" style="width: 200px" />
      <br /><br />
    </form>
  </div>

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
    <div class="boxpagamentos">
      <div>
        <h2>Formas de pagamentos</h2>
        <img src="imagens/pagamentos.png" class="imgpagamentos">
      </div>
</body>

</html>