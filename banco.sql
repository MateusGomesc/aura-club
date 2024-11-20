
CREATE TABLE artistas (
                id_artista INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                estilo VARCHAR(100) NOT NULL,
                imagem VARCHAR(255) NOT NULL,
                PRIMARY KEY (id_artista)
);


CREATE TABLE adicionais (
                id_adicionais INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                valor FLOAT NOT NULL,
                PRIMARY KEY (id_adicionais)
);


CREATE TABLE produtos (
                id_produto INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                valor FLOAT NOT NULL,
                PRIMARY KEY (id_produto)
);


CREATE TABLE eventos (
                id_evento INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                data DATE NOT NULL,
                horario TIME NOT NULL,
                imagem VARCHAR(255) NOT NULL,
                id_produto INT NOT NULL,
                PRIMARY KEY (id_evento)
);


CREATE TABLE evento_artista (
                id_evento_artista INT AUTO_INCREMENT NOT NULL,
                id_evento INT NOT NULL,
                id_artista INT NOT NULL,
                PRIMARY KEY (id_evento_artista, id_evento, id_artista)
);


CREATE TABLE fotos (
                id_foto INT NOT NULL,
                url VARCHAR(255) NOT NULL,
                id_evento INT NOT NULL,
                PRIMARY KEY (id_foto)
);


CREATE TABLE produto_adicional (
                id_produto_adicional INT AUTO_INCREMENT NOT NULL,
                id_produto INT NOT NULL,
                id_adicionais INT NOT NULL,
                PRIMARY KEY (id_produto_adicional, id_produto, id_adicionais)
);


CREATE TABLE users (
                id_user INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                cpf VARCHAR(14) NOT NULL,
                data_nasc DATE NOT NULL,
                email VARCHAR(255) NOT NULL,
                telefone VARCHAR(16) NOT NULL,
                instagram VARCHAR(30) NOT NULL,
                senha VARCHAR(255) NOT NULL,
                admin BOOLEAN DEFAULT 0 NOT NULL,
                vip BOOLEAN DEFAULT 0 NOT NULL,
                imagem VARCHAR(255) NOT NULL,
                rua VARCHAR(100) NOT NULL,
                num INT NOT NULL,
                cidade VARCHAR(100) NOT NULL,
                uf VARCHAR(40) NOT NULL,
                bairro VARCHAR(100) NOT NULL,
                cep VARCHAR(12) NOT NULL,
                PRIMARY KEY (id_user)
);


CREATE TABLE pedidos (
                id_pedido INT AUTO_INCREMENT NOT NULL,
                data DATE NOT NULL,
                valor_total FLOAT NOT NULL,
                id_user INT NOT NULL,
                PRIMARY KEY (id_pedido)
);


CREATE TABLE item_pedido (
                id_item_pedido INT AUTO_INCREMENT NOT NULL,
                id_pedido INT NOT NULL,
                id_produto INT NOT NULL,
                valor FLOAT NOT NULL,
                PRIMARY KEY (id_item_pedido, id_pedido, id_produto)
);


ALTER TABLE evento_artista ADD CONSTRAINT artistas_evento_artista_fk
FOREIGN KEY (id_artista)
REFERENCES artistas (id_artista)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE produto_adicional ADD CONSTRAINT adicionais_produto_adicional_fk
FOREIGN KEY (id_adicionais)
REFERENCES adicionais (id_adicionais)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE item_pedido ADD CONSTRAINT produtos_item_pedido_fk
FOREIGN KEY (id_produto)
REFERENCES produtos (id_produto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE produto_adicional ADD CONSTRAINT produtos_produto_adicional_fk
FOREIGN KEY (id_produto)
REFERENCES produtos (id_produto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE eventos ADD CONSTRAINT produtos_eventos_fk
FOREIGN KEY (id_produto)
REFERENCES produtos (id_produto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE fotos ADD CONSTRAINT eventos_fotos_fk
FOREIGN KEY (id_evento)
REFERENCES eventos (id_evento)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE evento_artista ADD CONSTRAINT eventos_evento_artista_fk
FOREIGN KEY (id_evento)
REFERENCES eventos (id_evento)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE pedidos ADD CONSTRAINT users_pedidos_fk
FOREIGN KEY (id_user)
REFERENCES users (id_user)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE item_pedido ADD CONSTRAINT pedidos_item_pedido_fk
FOREIGN KEY (id_pedido)
REFERENCES pedidos (id_pedido)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

INSERT INTO adicionais (nome, valor) VALUES ('Openbar', 1000);
INSERT INTO adicionais (nome, valor) VALUES ('Openfood', 750);
INSERT INTO produtos (nome, valor) VALUES ('Vip Lounge', 20000);