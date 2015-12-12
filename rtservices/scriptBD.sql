CREATE TABLE rtsEps (
idEps INT PRIMARY KEY AUTO_INCREMENT,
nombreEps VARCHAR() NOT NULL,
Telefono INT(15) NOT NULL,
Estado TINYINT(2) NOT NULL
)

CREATE TABLE rtsPersona_deb (
    idrtsPersona INT PRIMARY KEY AUTO_INCREMENT,
    Documento INT (15) NOT NULL,
    Nombre VARCHAR(70) NOT NULL,
    Apellidos VARCHAR(70) NOT NULL,
    Genero TINYINT(2) NOT NULL,
    Correo VARCHAR(60) NOT NULL,
    direccionResidencia VARCHAR(70) NOT NULL,
    Telefono BIGINT(15) NOT NULL,
    Celular BIGINT(15) NULL,
    fechaNacimiento DATE NOT NULL,
    fechaIngreso DATE NOT NULL,
    Estado TINYINT(2) NOT NULL,
    idEps INT NOT NULL,
    CONSTRAINT fk_EpsPersona FOREIGN KEY idEps REFERENCES rtseps(idEps)
)

CREATE TABLE rtsPersonaRol_det (
    idrtsPersonaRol_det INT PRIMARY KEY AUTO_INCREMENT,
    Estado TINYINT(2) NOT NULL,
    idrtsPersona INT NOT NULL,
    CONSTRAINT fk_personaRol FOREIGN KEY (idrtsPersona) REFERENCES rtspersona_deb(idrtsPersona),
    idrtsRol INT NOT NULL,
    CONSTRAINT fk_rolPersona FOREIGN KEY (idrtsRol) REFERENCES rtsrol(idrtsRol)
)

CREATE TABLE rtsLogin (
idrtsLogin INT PRIMARY KEY AUTO_INCREMENT,
Usuario VARCHAR(50) NOT NULL,
Clave VARCHAR(50) NOT NULL,
Estado TINYINT(2) NOT NULL,
idrtsPersonaRol_det INT NOT NULL,
CONSTRAINT fk_personaRolLogin FOREIGN KEY (idrtsPersonaRol_det) REFERENCES rtsPersonaRol_det(idrtsPersonaRol_det)
)

CREATE TABLE rtsReset(
idReset INT PRIMARY KEY AUTO_INCREMENT,
Token VARCHAR(50) NOT NULL,
fechaGenerado DATE NOT NULL,
Estado TINYINT(2) NOT NULL,
idrtsLogin INT NOT NULL,
CONSTRAINT fk_loginReset FOREIGN KEY (idrtsLogin) REFERENCES rtsLogin(idrtsLogin)
)

SELECT * FROM rtsLogin 
INNER JOIN rtsPersonaRol_det ON rtsLogin.idrtsPersonaRol_det = rtsPersonaRol_det.idrtsPersonaRol_det 
INNER JOIN rtsPersona_deb ON rtsPersonaRol_det.idrtsPersonaRol_det = rtsPersona_deb.idrtsPersona
WHERE rtsLogin.Estado = 1 AND rtsPersonaRol_det.Estado = 1 AND rtsPersona_deb.Estado = 1