-- Inserção de dados nas tabelas

-- Inserindo dados na tabela pessoas
-- Uma pessoa que não tem registro, não tem prontuário porém é possivel criar o prontuário antes e a seguir vincular diretamente a pessoa
INSERT INTO PESSOA VALUES('NOME','TELEFONE','DATA_NASC','RG','CPF','PROFISSAO','ID','NUMERACAO_SUS','Prontuario_ID','Plano_de_Saude_ID');

-- Inserindo dados na tabela Plano de Saúde
-- É necessário que exista um plano de saúde registrado para pessoas que não possuem planos de saúde(Apenas para registro de atendimento)
INSERT INTO PLANOS_DE_SAUDE VALUES ('ID','EMPRESA');

-- Inserindo dados na tabela Prontuário
-- Quando integrado o prontuário deve ser criado antes da inserção de uma nova pessoa(Ao clicar no botão de ação para registrar uma pessoa, a query deve ser executada ja criando um prontuario para vinvular a pessoa)
INSERT INTO PRONTUARIO VALUES ('ID','CPF_PESSOA');

--Inserindo dados na tabela médicos
INSERT INTO MEDICOS VALUES ('CRM','NOME');

--Inserindo dados na tabela atendimento
--Não podem existir dados nulos nessa tabela
INSERT INTO ATENDIMENTO VALUES('ID','Medicos_CRM','Prontuario_ID','DIAGNOSTICO','DESCRICAO','DATA_ATENDIMENTO');
