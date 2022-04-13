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
    senha varchar(50),
    perfil enum('adm', 'user')
);

$post nome;
$senha 
#inserir dado na tabela

$sql = "insert into usuario value(null,'Henrique','admin','123','adm');";

if($con,$sql){
    foi
} else
{
    erro
}

insert into usuario value(null,'Marcia','marcia','123','user');
insert into usuario value(null,'Hernandes','hernandes','123','user');
insert into usuario value(null,'Hanilo','danilo','123','user');
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