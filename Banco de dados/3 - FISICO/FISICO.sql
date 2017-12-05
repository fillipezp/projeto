
create database teste;
use teste;



CREATE TABLE JURIDICO (
    id_empresa INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    razao_social VARCHAR(200) NOT NULL,
    nfantasia VARCHAR(200) NOT NULL,
    cnpj VARCHAR(18) NOT NULL,
    ie VARCHAR(10) NOT NULL,
    ramo VARCHAR(50) NOT NULL,
    id_user INTEGER REFERENCES USUARIO(id_user)
);

CREATE TABLE CANDIDATO (
    id_candidato INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(200) NOT NULL,
    sexo CHAR(1) NOT NULL,
    estado_civil VARCHAR(15) NOT NULL,
    dt_nascimento VARCHAR(15) NOT NULL,
    rg VARCHAR(15) NOT NULL,
    og_exped_uf VARCHAR(10) NOT NULL,
    dt_exp DATE,
    cpf VARCHAR(15) NOT NULL,
    FK_USER_id_user INTEGER REFERENCES usuarios(user_id)

);


CREATE TABLE VAGAS (
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    n_vagas INTEGER,
    horario VARCHAR(30),
    c_hora INTEGER,
    remun DECIMAL(10,2),
    atividades VARCHAR(300) NOT NULL,
    beneficios VARCHAR(300),

    FK_JURIDICO_id_empresa INTEGER REFERENCES JURIDICO(id_empresa)
);



CREATE TABLE CANDIDATAR (
    FK_VAGAS_id INTEGER REFERENCES VAGAS(id),
    FK_CANDIDATO_id_candidato INTEGER REFERENCES CANDIDATO(id_candidato),
    PRIMARY KEY (FK_VAGAS_id, FK_CANDIDATO_id_candidato) 
);

CREATE TABLE CONTATO (
    residencial VARCHAR(20) NOT NULL,
    celular VARCHAR(20),
    linkedin VARCHAR(100),
    FK_USER_id_candidato INTEGER REFERENCES CANDIDATO(id_candidato),
    id_juridico_fk INTEGER REFERENCES JURIDICO(id_empresa)
);

CREATE TABLE FORMACAO (
    nvl_ensino VARCHAR(50),
    instituicao VARCHAR(200),
    curso VARCHAR(200),
    conclusao VARCHAR(20),
    FK_CANDIDATO INTEGER REFERENCES CANDIDATO(id_candidato)
);

CREATE TABLE ENDERECO (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    numero Integer,
    complemento VARCHAR(100),
    cep VARCHAR(10) NOT NULL,
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(200),
    logradouro VARCHAR(200) NOT NULL,
    id_juridico_fk INTEGER REFERENCES JURIDICO(id_empresa),
    id_canditato_fk INTEGER REFERENCES CANDIDATO(id_candidato)
);


ALTER TABLE `contato` ADD `id` INT NOT NULL primary key AUTO_INCREMENT;
alter table vagas add COLUMN cargo varchar(50) not null;


CREATE TABLE `teste`.`usuarios` (
  `user_id` INT (11) NOT NULL AUTO_INCREMENT COMMENT 'ID do Usuário',
  `user` VARCHAR (255) NOT NULL COMMENT 'Usuário',
  `user_name` VARCHAR (255) NOT NULL COMMENT 'Nome do usuário',
  `user_password` VARCHAR (255) NOT NULL COMMENT 'Senha',
  PRIMARY KEY (`user_id`)

);

insert into usuarios(user_id, user ,user_name,user_password) values (1, 'adm', 'adm','1234');

drop user 'adm'@'localhost'; 
CREATE USER 'adm'@'localhost' IDENTIFIED BY '1234';   





FLUSH PRIVILEGES;

GRANT
  ALTER,
  ALTER ROUTINE,
  CREATE,
  CREATE ROUTINE,
  CREATE TEMPORARY TABLES,
  CREATE VIEW,
  DELETE,
  DROP,
  EVENT,
  EXECUTE,
  INDEX,
  INSERT,
  LOCK TABLES,
  REFERENCES,
  SELECT,
  SHOW VIEW,
  TRIGGER,
  UPDATE 
ON
  `teste`.* 
TO
  'adm' @'localhost'; 
  