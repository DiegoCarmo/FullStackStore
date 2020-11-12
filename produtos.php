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

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>

<body>

  <!--   MENU -->
  <?php
  include("menu.html");
  ?>

<div class="container-fluid bg-secondary mx-0 px-0 py-2">
  <nav class="navbar-expand-lg navbar-dark">

        <button class="navbar-toggler w-100" type="button" data-toggle="collapse" data-target="#categoriasNav">
        <span class="text-light">Categorias</span></button>

   <div id="categoriasNav" class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav nav-fill w-100">
        <li class="nav-item font-weight-bold">
          <span class="col text-light mx-4" onclick="exibir_todos()">Todos(12)</span>
        </li>
        <li class="nav-item font-weight-bold">
          <span class="col text-light mx-4" onclick="exibir_categoria('acessorios')">Acessorios(3)</span>
        </li>
        <li class="nav-item font-weight-bold">
          <span class="col text-light mx-4" onclick="exibir_categoria('livros')">Livros(3)</span>
        </li>   
        <li class="nav-item font-weight-bold">
          <span class="col text-light mx-4" onclick="exibir_categoria('eletronicos')">Eletronicos(3)</span>
        </li>  
        <li class="nav-item font-weight-bold">
          <span class="col text-light mx-4" onclick="exibir_categoria('canecas')">Canecas(3)</span>
        </li>     
      </ul>
   </div>
 </nav>
</div>


  <header class="container-fluid">
    <h2>Produtos</h2>
  </header>
  <hr />
  
 


<div class="container-fluid row row-cols-2 row-cols-md-3 mx-auto">
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
    

        <div class="boxproduto col" id="<?php echo $linha["categoria"]; ?>">
        <div class="bg-secondary  py-4 bg-produto">
          <img class="imgproduto" src="<?php echo $linha["nome_imagem"]; ?>"onclick="destaque(this)" /> <br />
          <hr />
          <p class="nomeproduto text-light"><?php echo $linha["descricao"]; ?></p>
          <p class="preco">R$ <?php echo $linha["preco_antigo"]; ?></p>
          <p class="novopreco">R$<?php echo $linha["preco"]; ?></p>

          <form method="post">
            <input type="submit" class="btnComprar btn btn-primary" value="Comprar" onclick="comprou()" />
            <input type="hidden" name="cliente" value="cliente_default">
            <input type="hidden" name="nome_produto" value=<?php echo $linha["descricao"]; ?>>
            <input type="hidden" name="valor_unitario" value=<?php echo $linha["preco"]; ?>>
          </form>
          </div>
        </div>
     
    <?php
      }
    } else {
      echo "nenhum produto cadastrado!";
    }
    ?>
    </div>

    <?php
      include("footer.html");
    ?>

  <script src="main.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>

</html>