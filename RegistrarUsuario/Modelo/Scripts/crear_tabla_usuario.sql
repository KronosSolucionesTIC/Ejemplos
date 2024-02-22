CREATE TABLE `proyecto`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NULL,
  `apellido_usuario` VARCHAR(45) NULL,
  `documento_usuario` VARCHAR(45) NULL,
  `password_usuario` VARCHAR(45) NULL,
  `estado_usuario` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`id_usuario`)
);