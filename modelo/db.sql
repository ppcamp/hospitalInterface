CREATE TABLE login(
    nickname VARCHAR(16) NOT NULL,
    password VARCHAR(16) NOT NULL,
    id SERIAL NOT NULL,
    CONSTRAINT login_pk PRIMARY KEY (id)
);
INSERT INTO login(nickname, password) VALUES ('hnsd','hnsd');

CREATE TABLE planos(
    empresa VARCHAR(20),
    id_plano SERIAL NOT NULL,
    CONSTRAINT Planos_pk PRIMARY KEY (id_plano)
);
INSERT INTO planos(empresa) VALUES ('SUS');
INSERT INTO planos(empresa) VALUES ('Unimed');
INSERT INTO planos(empresa) VALUES ('IMPSEMG');
INSERT INTO planos(empresa) VALUES ('Univida');

CREATE TABLE pessoa(
    nome_responsavel VARCHAR(40),
    telefone VARCHAR(20),
    profissao VARCHAR(40),
    cpf bigint NOT NULL,
    numero_plano VARCHAR(20),
    nome VARCHAR(40)  NOT NULL,
    estado_civil INTEGER NOT NULL,
    numeracao_sus int NOT NULL,
    menor int  NOT NULL,
    CONSTRAINT Pessoa_pk PRIMARY KEY (cpf)
);

CREATE TABLE consulta(
    plano_consulta int NOT NULL,
    medico VARCHAR(40) NOT NULL,
    sintomas VARCHAR(100) NOT NULL,
    tratamento VARCHAR(100) NOT NULL,
    cpf bigint NOT NULL,
    id SERIAL NOT NULL,
    CONSTRAINT Consulta_pk PRIMARY KEY (id),
    CONSTRAINT Consulta_fk FOREIGN KEY (cpf) REFERENCES pessoa(cpf)    
);