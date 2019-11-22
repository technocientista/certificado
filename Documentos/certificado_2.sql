/* Lógico: */

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(30),
    senha VARCHAR(32),
    nome_usuario VARCHAR(60),
    cpf_usuario VARCHAR(11),
    tel_usuario VARCHAR(11),
    email_usuario VARCHAR(30),
    fk_papel_id_papel INT,
    status BOOLEAN

);

CREATE TABLE atividade (
    id_atv INT PRIMARY KEY AUTO_INCREMENT,
    nome_atv VARCHAR(30),
    data_inicial_atv DATE,
    carga_horaria_atv VARCHAR(11),
    data_final_atv DATE,
    local VARCHAR(60),
    status BOOLEAN
);

CREATE TABLE papel (
    nome_papel VARCHAR(60),
    fk_permissoes_id_perm INT,
    id_papel INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE msg_suporte (
    id_suporte INT PRIMARY KEY AUTO_INCREMENT,
    assunto VARCHAR(60),
    nome VARCHAR(60),
    telefone VARCHAR(11),
    mensagem VARCHAR(100),
    email VARCHAR(30)
);

CREATE TABLE permissoes (
    id_perm INT PRIMARY KEY AUTO_INCREMENT,
    nivel VARCHAR(11),
);

CREATE TABLE responde_msg (
    fk_usuario_id_usuario INT,
    fk_msg_suporte_id_suporte INT
);

CREATE TABLE participa (
    fk_usuario_id_usuario INT,
    fk_atv_id_atv INT,
    id_participa INT PRIMARY KEY AUTO_INCREMENT,
    fk_situacao_ativ_id_situacao_ativ INT
);

CREATE TABLE certificado (
    fk_participa_id_participa INT,
    fk_situacao_certif_id_situacao_certif INT,
    id_certificado INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE situacao_ativ (
    id_situacao_ativ INT PRIMARY KEY AUTO_INCREMENT,
    situacao_ativ VARCHAR(30)
);

CREATE TABLE situacao_certif (
    id_situacao_certif INT PRIMARY KEY AUTO_INCREMENT,
    situacao_certif VARCHAR(30)
    
);

ALTER TABLE usuario ADD CONSTRAINT FK_usuario_2
FOREIGN KEY (fk_papel_id_papel)
REFERENCES papel (id_papel)
ON DELETE CASCADE
ON UPDATE CASCADE;

ALTER TABLE papel ADD CONSTRAINT FK_papel_1
FOREIGN KEY (fk_permissoes_id_perm)
REFERENCES permissoes (id_perm)
ON DELETE CASCADE;

ALTER TABLE responde_msg ADD CONSTRAINT FK_responde_msg_1
FOREIGN KEY (fk_usuario_id_usuario)
REFERENCES usuario (id_usuario)
ON DELETE RESTRICT;

ALTER TABLE responde_msg ADD CONSTRAINT FK_responde_msg_2
FOREIGN KEY (fk_msg_suporte_id_suporte)
REFERENCES msg_suporte (id_suporte)
ON DELETE SET NULL;

ALTER TABLE participa ADD CONSTRAINT FK_participa_1
FOREIGN KEY (fk_usuario_id_usuario)
REFERENCES usuario (id_usuario)
ON DELETE CASCADE
ON UPDATE CASCADE;

ALTER TABLE participa ADD CONSTRAINT FK_participa_2
FOREIGN KEY (fk_atv_id_atv)
REFERENCES atividade (id_atv)
ON DELETE CASCADE
ON UPDATE CASCADE;

ALTER TABLE participa ADD CONSTRAINT FK_participa_4
FOREIGN KEY (fk_situacao_ativ_id_situacao_ativ)
REFERENCES situacao_ativ (id_situacao_ativ);

ALTER TABLE certificado ADD CONSTRAINT FK_certificado_1
FOREIGN KEY (fk_situacao_certif_id_situacao_certif)
REFERENCES situacao_certif (id_situacao_certif);

ALTER TABLE certificado ADD CONSTRAINT FK_certificado_3
FOREIGN KEY (fk_participa_id_participa)
REFERENCES participa (id_participa);