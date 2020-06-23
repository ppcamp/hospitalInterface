-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-10-12 17:48:59.148

-- tables
-- Table: Atendimento
CREATE TABLE Atendimento (
    ID int  NOT NULL,
    Medicos_CRM bigint  NOT NULL,
    Prontuario_ID int  NOT NULL,
    DIAGNOSTICO varchar(46)  NOT NULL,
    DESCRICAO varchar(140)  NOT NULL,
    DATA int  NOT NULL,
    CONSTRAINT Atendimento_pk PRIMARY KEY (ID)
);

-- Table: Medicos
CREATE TABLE Medicos (
    CRM bigint  NOT NULL,
    Nome varchar(40)  NOT NULL,
    CONSTRAINT Medicos_pk PRIMARY KEY (CRM)
);

-- Table: Pessoa
CREATE TABLE Pessoa (
    NOME varchar(40)  NOT NULL,
    TELEFONE bigint  NULL,
    DATA_NASC date  NOT NULL,
    RG bigint  NULL,
    CPF bigint  NULL,
    PROFISSAO varchar(40) NULL,
    ID int  NOT NULL,
    NUMERACAO_SUS bigint NOT NULL,
    Prontuario_ID int  NOT NULL,
    Planos_de_Saude_ID int  NOT NULL,
    CONSTRAINT Pessoa_pk PRIMARY KEY (ID)
);

-- Table: Planos_de_Saude
CREATE TABLE Planos_de_Saude (
    ID int  NOT NULL,
    EMPRESA varchar(30)  NULL,
    CONSTRAINT Planos_de_Saude_pk PRIMARY KEY (ID)
);

-- Table: Prontuario
CREATE TABLE Prontuario (
    ID int  NOT NULL,
    CPF_Pessoa bigint NULL,
    CONSTRAINT Prontuario_pk PRIMARY KEY (ID)
);

-- foreign keys
-- Reference: Atendimento_Medicos (table: Atendimento)
ALTER TABLE Atendimento ADD CONSTRAINT Atendimento_Medicos
    FOREIGN KEY (Medicos_CRM)
    REFERENCES Medicos (CRM)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Atendimento_Prontuario (table: Atendimento)
ALTER TABLE Atendimento ADD CONSTRAINT Atendimento_Prontuario
    FOREIGN KEY (Prontuario_ID)
    REFERENCES Prontuario (ID)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Pessoa_Planos_de_Saude (table: Pessoa)
ALTER TABLE Pessoa ADD CONSTRAINT Pessoa_Planos_de_Saude
    FOREIGN KEY (Planos_de_Saude_ID)
    REFERENCES Planos_de_Saude (ID)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Pessoa_Prontuario (table: Pessoa)
ALTER TABLE Pessoa ADD CONSTRAINT Pessoa_Prontuario
    FOREIGN KEY (Prontuario_ID)
    REFERENCES Prontuario (ID)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Unique: CPF

ALTER TABLE Pessoa ADD CONSTRAINT CPF_unique UNIQUE (CPF)
;



-- End of file.

