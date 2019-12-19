use pessoa;
create table buscador (
  id int(11) not null auto_increment,
  nome tinytext,
  idade tinyint,
  sexo tinytext,
  primary key (id)
)ENGINE = InnoDB;

select * from buscador where nome = "joao" and idade = 18 and sexo = "masculino";