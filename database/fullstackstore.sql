create database if not exists fullstack
default character set utf8mb4;

use fullstack;

create table produto(
	id_nome int auto_increment not null, 
    categoria varchar(100),
    descricao varchar(100),
    preco_antigo float(10,2),
    preco float(10,2),
    nome_imagem varchar(100),
	primary key (id_nome)
)default charset utf8mb4;



insert into produto 
(categoria, descricao, preco_antigo, preco, nome_imagem)
values
('acessorios','Nike air mag 2015',1200.00,999.99,'imagens/produtos/Airmag.png'),
('acessorios','Bone Dino',120.00,89.90,'imagens/produtos/bone.jpg'),
('acessorios','Camisa Developer',120.00,99.90,'imagens/produtos/camisa.jpg'),
('livros','Livro - JS e JQuery',150.00,79.90,'imagens/produtos/livros.jpg'),
('livros','Livro - HTML e CSS',130.00,69.90,'imagens/produtos/livrohtml.jpg'),
('livros','Livro - Guia pratico',200.00,99.99,'imagens/produtos/guiapratico.jpg'),
('eletronicos','Iphone 11',5999.00,2999.00,'imagens/produtos/iphone.jpg'),
('eletronicos','PlayStation 5 2020',5000.00,1999.00,'imagens/produtos/play5.png'),
('eletronicos','Xbox Series X',4999.00,1999.00,'imagens/produtos/xbox.jpg'),
('canecas','Caneca FUllstack',59.90,39.99,'imagens/produtos/canecaFull.jpg'),
('canecas','Caneca Black Coffe',59.90,39.99,'imagens/produtos/canecaBlack.jpg'),
('canecas','Caneca CSS',59.90,39.99,'imagens/produtos/canecaCss.jpg');


create table pedido(

  id_pedido int AUTO_INCREMENT,
  cliente varchar(45),
  endereco varchar(45),
  telefone varchar(20),
  nome_produto varchar(255),
  valor_unitario float,
  quantidade int DEFAULT 1,
  valor_total decimal(10,2),
  PRIMARY KEY (id_pedido)
)default charset utf8mb4;


INSERT INTO pedido 
(cliente, endereco, telefone, nome_produto, valor_unitario, quantidade, valor_total)
VALUES
('Sara Leal','Rua japao','011-11111111','Nike air mag 2015',999.99,1,NULL),
('Rafael Amaral','Rua Argentina','011- 22222222','Livro - Guia pratico',99.99,2,NULL),
('Samantha','Rua Brasil','011- 33333333','Camisa Developer',99.99,3,NULL),
('Vinicius','Rua paris','011- 44444444','Bone Dino',89.9,4,NULL),
('Cosmo','Rua portugal','011- 55555555','Caneca FUllstack',39.99,5,NULL);



create table contato(
  id_contato int auto_increment,
  nome varchar (30),
  msg varchar (300),
primary key (id_contato))


