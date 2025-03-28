CREATE DATABASE blog;
USE blog;

CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  alias VARCHAR(255),
  contraseña VARCHAR(255) NOT NULL,
  fecha_registro DATE DEFAULT CURRENT_DATE
);

CREATE TABLE posts(
	id_post INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT ,
  titulo VARCHAR(255) NOT NULL,
  cuerpo TEXT NOT NULL,
  fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  fecha_modificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE comentarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
  id_post INT,
  texto VARCHAR(255),
  fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_post) REFERENCES posts(id)
);


INSERT INTO usuarios(email,alias,contraseña) 
	VALUES 
  ("pepito@yahoo.com","PP",'jklasdjfkla'),
  ("tipodeincognito@hotmail.com","nothomersimpson",'asdfasdfasdf'),
  ("picklerick@morty.com","realrick",'ajksadhfjkasdjhk');

DELETE FROM usuarios WHERE email='tipodeincognito@hotmail.com';







