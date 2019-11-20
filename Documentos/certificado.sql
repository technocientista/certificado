/* Lógico: */

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(30),
    fk_papel INT,
    senha VARCHAR(32),
    nome_usuario VARCHAR(60),
    cpf_usuario VARCHAR(11),
    tel_usuario VARCHAR(11),
    email_usuario VARCHAR(30)
);

CREATE TABLE atividade (
    id_atv INT PRIMARY KEY AUTO_INCREMENT,
    nome_atv VARCHAR(30),
    data_inicial_atv DATE,
    carga_horaria_atv VARCHAR(11),
    data_final_atv DATE,
    local VARCHAR(60),
    fk_situacao_ativ_id_situacao_ativ INT
);

CREATE TABLE papel (
    nome_papel VARCHAR(60),
    fk_permissoes_id_perm INT,
    id_papel INT PRIMARY KEY
);

CREATE TABLE certificado (
    id_certificado INT PRIMARY KEY AUTO_INCREMENT,
    fk_situacao_certif_id_situacao_certif INT,
    conteudo INT,
    fk_usuario_id_usuario INT
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
    nivel INT
);

CREATE TABLE cria (
    fk_usuario_id_usuario INT,
    fk_atv_id_atv INT
);

CREATE TABLE altera (
    fk_usuario_id_usuario INT,
    fk_certificado_id_certificado INT
);

CREATE TABLE recebe_msg (
    fk_usuario_id_usuario INT,
    fk_msg_suporte_id_suporte INT
);

CREATE TABLE participa (
    fk_usuario_id_usuario INT,
    fk_atv_id_atv INT
);

CREATE TABLE recebe_cert (
    fk_usuario_id_usuario INT,
    fk_certificado_id_certificado INT
);

CREATE TABLE cadastra (
    fk_papel INT,
    fk_usuario_id_usuario INT
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
    FOREIGN KEY (fk_papel)
    REFERENCES papel (id_papel);
 
ALTER TABLE atividade ADD CONSTRAINT FK_atividade_2
    FOREIGN KEY (fk_situacao_ativ_id_situacao_ativ)
    REFERENCES situacao_ativ (id_situacao_ativ);
 
ALTER TABLE papel ADD CONSTRAINT FK_papel_1
    FOREIGN KEY (fk_permissoes_id_perm)
    REFERENCES permissoes (id_perm)
    ON DELETE CASCADE;
 
ALTER TABLE certificado ADD CONSTRAINT FK_certificado_2
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario);
 
ALTER TABLE certificado ADD CONSTRAINT FK_certificado_3
    FOREIGN KEY (conteudo)
    REFERENCES usuario (id_usuario);
 
ALTER TABLE certificado ADD CONSTRAINT FK_certificado_4
    FOREIGN KEY (fk_situacao_certif_id_situacao_certif)
    REFERENCES situacao_certif (id_situacao_certif);
 
ALTER TABLE cria ADD CONSTRAINT FK_cria_1
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE RESTRICT;
 
ALTER TABLE cria ADD CONSTRAINT FK_cria_2
    FOREIGN KEY (fk_atv_id_atv)
    REFERENCES atividade (id_atv)
    ON DELETE SET NULL;
 
ALTER TABLE altera ADD CONSTRAINT FK_altera_1
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE RESTRICT;
 
ALTER TABLE altera ADD CONSTRAINT FK_altera_2
    FOREIGN KEY (fk_certificado_id_certificado)
    REFERENCES certificado (id_certificado)
    ON DELETE SET NULL;
 
ALTER TABLE recebe_msg ADD CONSTRAINT FK_recebe_msg_1
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE RESTRICT;
 
ALTER TABLE recebe_msg ADD CONSTRAINT FK_recebe_msg_2
    FOREIGN KEY (fk_msg_suporte_id_suporte)
    REFERENCES msg_suporte (id_suporte)
    ON DELETE SET NULL;
 
ALTER TABLE participa ADD CONSTRAINT FK_participa_1
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE RESTRICT;
 
ALTER TABLE participa ADD CONSTRAINT FK_participa_2
    FOREIGN KEY (fk_atv_id_atv)
    REFERENCES atividade (id_atv)
    ON DELETE SET NULL;
 
ALTER TABLE recebe_cert ADD CONSTRAINT FK_recebe_cert_1
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE RESTRICT;
 
ALTER TABLE recebe_cert ADD CONSTRAINT FK_recebe_cert_2
    FOREIGN KEY (fk_certificado_id_certificado)
    REFERENCES certificado (id_certificado)
    ON DELETE SET NULL;
 
ALTER TABLE cadastra ADD CONSTRAINT FK_cadastra_1
    FOREIGN KEY (fk_papel)
    REFERENCES papel (id_papel);
 
ALTER TABLE cadastra ADD CONSTRAINT FK_cadastra_2
    FOREIGN KEY (fk_usuario_id_usuario)
    REFERENCES usuario (id_usuario);