CREATE TABLE Tickets (
    id_ticket NUMBER PRIMARY KEY,
    titulo VARCHAR2(100) NOT NULL,
    descripcion VARCHAR2(500),
    fecha_creacion DATE,
    estado VARCHAR2(20)
);
