CREATE DATABASE ESTUDO; GO
if CONTRATADO{
CREATE TABLE CONTRATADO( PRIMARY KEY id_CPF int(11)[not null],
Nome_char(50) [not null],
Idade_int(3) [not null],
Identidade(11) [not null],
CPF_int(11) [not null],
);

INSERT INTO CONTRATADO[(id_Identidade,Nome,Idade,CPF)
VALUES('','','','');
GO
};
if CADASTRADO {
CREATE TABLE CADASTRO( FORYGNE KEY id_Identidade varchar(18)[not null],
Nome_char(50) [not null],
Idade_int(3) [not null],
Identidade_varchar(18) [not null],
CPF_int(11) [not null],
);

INSERT INTO CADASTRO[(id_Identidade,Nome,Idade,CPF)
VALUES('','','','');
GO
};
else {
ALTER TABLE CADASTRO ADD/DROP(
id_Identidade_varchar(18)[not null]
Nome_char(50) [not null],
Idade_int(3) [not null],
CPF_int(11) [not null],
);
GO
SELECT DISTINCT Nome, FROM CADASTRO WHERE ESTUDO ORDER BY asc;
