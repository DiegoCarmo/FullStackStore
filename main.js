function comprou() {
  window.alert("Parabens pela compra");
};

function exibir_categoria(categorias) {
  let elementos = document.getElementsByClassName('boxproduto');
  console.log(elementos);
  for (var i = 0; i < elementos.length; i++) {
    console.log(elementos[i].id)
    if (categorias == elementos[i].id)
      elementos[i].style = "display:inline-block";
    else
      elementos[i].style = "display:none";
  };
};

let exibir_todos = () => {
  let elementos = document.getElementsByClassName('boxproduto');
  for (var i = 0; i < elementos.length; i++) {

    elementos[i].style = "display:inline-block";

  };
};

let destaque = (imagem) => {
console.log(imagem);
if(imagem.width == 120)
  imagem.width = 180
  else
  imagem.width = 120
};
