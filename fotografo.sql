CREATE TABLE posts (
  id_post       int(11) NOT NULL AUTO_INCREMENT,
  imagen_post   varchar(250) NOT NULL,
  titulo_post   varchar(250) NOT NULL,
  extracto      varchar(250) NOT NULL,
  descripcion_post longblob NOT NULL,
  fecha         timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY(id_post)
);

CREATE TABLE imagenes (
  id_imagen     int(11) NOT NULL AUTO_INCREMENT,
  imagen        varchar(250) NOT NULL,
  id_post       int(11) NOT NULL,
  PRIMARY KEY (id_imagen),
  FOREIGN KEY (id_post) REFERENCES posts (id_post) ON DELETE CASCADE
);

CREATE TABLE imagenesalbum (
  id_imagen      int(11) NOT NULL AUTO_INCREMENT,
  imagen          varchar(250) NOT NULL,
  categoria       varchar(50) NOT NULL,
  PRIMARY KEY (id_imagen)
);

CREATE TABLE usuario (
  id_usuario        int(11) NOT NULL AUTO_INCREMENT,
  nombre            varchar(100) NOT NULL,
  email             varchar(100) NOT NULL,
  pass              varchar(100) NOT NULL,
  PRIMARY KEY (id_usuario)
);



INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `pass`) VALUES
(1, 'Jonatan Castillo', 'administrador@gmail.com', 'administrador123');
