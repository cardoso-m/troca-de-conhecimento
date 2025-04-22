BANCO DE DADOS:
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE habilidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE trocas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ofertante_id INT NOT NULL,
    interessado_id INT NOT NULL,
    habilidade_id INT NOT NULL,
    status VARCHAR(50) NOT NULL,
    FOREIGN KEY (ofertante_id) REFERENCES usuarios(id),
    FOREIGN KEY (interessado_id) REFERENCES usuarios(id),
    FOREIGN KEY (habilidade_id) REFERENCES habilidades(id)
);
