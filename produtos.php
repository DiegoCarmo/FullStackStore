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

?>
<!--      conectandoDB fim      -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="index.css" />
  <title>FullStack Store</title>
  <style class="imgproduto">

  </style>
</head>

<body>
  <div class="imagem01"><a href="index.php"><img src="imagens/box logo.png" class="boxlogo" />
      <script src="main.js"></script>
    </a>
  </div>

  <!--   MENU -->
  <?php
  include("menu.html");
  ?>

  <header>
    <h2 id="h2">Produtos</h2>
  </header>
  <hr />
  <section class="categorias">
    <ul>
      <li onclick="exibir_todos()">Todos(12)</li>
      <li onclick="exibir_categoria('acessorios')">Acessorios(3)</li>
      <li onclick="exibir_categoria('livros')">livros(3)</li>
      <li onclick="exibir_categoria('eletronicos')">Eletronicos(3)</li>
      <li onclick="exibir_categoria('canecas')">Canecas(3)</li>
    </ul>
  </section>

  <div>
    <?php
    $sql = "select * from  produto";
    $resultado = $conexao->query($sql);

    if (isset($_POST['cliente']) && isset($_POST['nome_produto']) && isset($_POST['valor_unitario'])) {
      $cliente = $_POST['cliente'];
      $nome_produto = $_POST['nome_produto'];
      $valor_unitario = $_POST['valor_unitario'];
      $sql = "insert into pedido (cliente, nome_produto, valor_unitario ) values('$cliente','$nome_produto','$valor_unitario')";
      $envio = $conexao->query($sql);
    }
    if ($resultado->num_rows > 0) {
      while ($linha = $resultado->fetch_assoc()) {

    ?>

        <div class="boxproduto" id="<?php echo $linha["categoria"]; ?>">
          <img class="imgproduto" src="<?php echo $linha["nome_imagem"]; ?>" width="120px" onclick="destaque(this)" /> <br />
          <hr />
          <p class="nomeproduto"><?php echo $linha["descricao"]; ?></p>
          <p class="preco">R$ <?php echo $linha["preco_antigo"]; ?></p>
          <p class="novopreco">R$<?php echo $linha["preco"]; ?></p>

          <form method="post">
            <input type="submit" class="btnComprar" value="Comprar" onclick="comprou()" />
            <input type="hidden" name="cliente" value="cliente_default">
            <input type="hidden" name="nome_produto" value=<?php echo $linha["descricao"]; ?>>
            <input type="hidden" name="valor_unitario" value=<?php echo $linha["preco"]; ?>>
          </form>
        </div>

    <?php
      }
    } else {
      echo "nenhum produto cadastrado!";
    }
    ?>
  </div>
  <script src="main.js"></script>
</body>

</html>