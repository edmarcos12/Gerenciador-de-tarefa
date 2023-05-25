CREATE TABLE usuarios(
    id int primary key auto_increment,
    email varchar(120) unique,
    senha varchar(120)
);
CREATE TABLE tarefas(
    id int primary key auto_increment,
    id_usuario int,
    nome varchar(250)
);