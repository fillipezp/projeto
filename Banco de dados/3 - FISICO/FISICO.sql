
create database teste;
use teste;


CREATE TABLE USUARIO (
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(32) NOT NULL,
    id_user INTEGER AUTO_INCREMENT PRIMARY KEY 
);

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
    dt_nascimento DATE NOT NULL,
    rg VARCHAR(15) NOT NULL,
    og_exped_uf VARCHAR(10) NOT NULL,
    dt_exp DATE,
    cpf VARCHAR(15) NOT NULL,
    FK_USER_id_user INTEGER REFERENCES USUARIO(id_user)
);

CREATE TABLE ADMIN (
    id_admin INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_user INTEGER REFERENCES USUARIO(id_user)
);



CREATE TABLE LOG (
    data_hora DATE,
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    FK_USER_id_user INTEGER REFERENCES USUARIO(id_user)
);

CREATE TABLE VAGAS (
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    n_vagas INTEGER,
    horario VARCHAR(30),
    c_hora INTEGER,
    remun DECIMAL(4,2),
    atividades VARCHAR(300) NOT NULL,
    beneficios VARCHAR(300),

    FK_JURIDICO_id_empresa INTEGER REFERENCES JURIDICO(id_empresa)
);

CREATE TABLE ESTAGIO (
    poss_efetivo CHAR(3),
    disp_turno VARCHAR(10),
    FK_VAGAS_id INTEGER PRIMARY KEY REFERENCES VAGAS(id)
);

CREATE TABLE EFETIVO (
    FK_VAGAS_id INTEGER PRIMARY KEY REFERENCES VAGAS(id)
);

CREATE TABLE CANDIDATAR (
    FK_VAGAS_id INTEGER REFERENCES VAGAS(id),
    FK_CANDIDATO_ENDERECO_id_candidato INTEGER REFERENCES CANDIDATO(id_candidato),
    PRIMARY KEY (FK_VAGAS_id, FK_CANDIDATO_ENDERECO_id_candidato) 
);

CREATE TABLE CONTATO (
    residencial VARCHAR(20) NOT NULL,
    celular VARCHAR(20),
    linkedin VARCHAR(100),
    FK_USER_id_user INTEGER REFERENCES USUARIO(id_user)
);

CREATE TABLE FORMACAO (
    nvl_ensino VARCHAR(50),
    instituicao VARCHAR(200),
    curso VARCHAR(200),
    conclusao VARCHAR(20),
    FK_CANDIDATO INTEGER REFERENCES CANDIDATO(id_candidato)
);

CREATE TABLE ENDERECO (
    id INTEGER AUTO_INCREMENT PRIMARY KEY
    numero Integer,
    complemento VARCHAR(100),
    cep VARCHAR(10) NOT NULL,
    bairro VARCHAR(100),
	estado VARCHAR(200),
    logradouro VARCHAR(200) NOT NULL,
    id_juridico_fk INTEGER REFERENCES JURIDICO(id_empresa),
    id_canditato_fk INTEGER REFERENCES CANDIDATO(id_candidato)
);
 
