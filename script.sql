mysql -u root
#criar base
create database aula11;

chamar a base
use aula11;

#criar tabela
create table usuario (
    idusuario int  auto_increment primary key,
    nome varchar(50),
    login varchar(20) unique,
    email varchar(50),
    senha varchar(50),
    perfil enum('adm', 'user'),
    cep int(20),
    rua varchar(50),
    bairro varchar(50),
    cidade varchar(20),
    estado varchar(20),
    ibge int (30)
);

$post nome;
$senha 
#inserir dado na tabela

$sql = "insert into usuario value(null,'Henrique','admin','henriqueAemail.com','123','adm','25525480','Rua B','Pavuna','Rio de Janeiro','RJ','3304557');";

if($con,$sql){
    foi
} else
{
    erro
}

insert into usuario value(null,'Marcia','marcia','marcia@email.com','123','user','21520490','Rua Paschoal José Granado','Pavuna','Rio de Janeiro','RJ','3304557');

select * from usuario;



create table produto(
    idproduto int auto_increment primary key,
    nome varchar(20),
    estoque int,
    valor double,
    categoria varchar(20)

);


# inserir registro na tabela de cliente
insert into produto values(null,'Tablet',100,700.,'eletronico');
select * from produto;

# visualizar a tabela
show tables;

#descrever os dados de uma tabela
desc produto;