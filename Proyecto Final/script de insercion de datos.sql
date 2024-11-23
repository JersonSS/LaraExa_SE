-- Insert en la tabla propietarios
INSERT INTO propietarios (dni, nombre, apellido, telefono, correo) VALUES
(75263412, 'Carlos', 'Quispe', 987654321, 'carlos.quispe@hotmail.com'),
(81234567, 'Ana', 'Pérez', 912345678, 'ana.perez@hotmail.com'),
(75612389, 'Luis', 'Gómez', 965432198, 'luis.gomez@hotmail.com'),
(78456932, 'María', 'Huamán', 975312654, 'maria.huaman@hotmail.com'),
(71928374, 'José', 'Rojas', 954328176, 'jose.rojas@hotmail.com');

-- Insert en la tabla veterinarios
INSERT INTO veterinarios (dni, nombre, apellido, telefono, especialidad, correo, fnacimiento) VALUES
(70123456, 'Fernando', 'Salazar', 987123456, 'Medicina General', 'fernando.salazar@hotmail.com', '1985-02-14'),
(70234567, 'Gloria', 'Villanueva', 987654321, 'Dermatología', 'gloria.villanueva@hotmail.com', '1980-08-25'),
(70345678, 'Andrés', 'Hernández', 912345678, 'Cirugía', 'andres.hernandez@hotmail.com', '1990-05-18'),
(70456789, 'Patricia', 'Mendoza', 987456123, 'Odontología', 'patricia.mendoza@hotmail.com', '1983-11-02'),
(70567890, 'Marco', 'Torres', 978321654, 'Oftalmología', 'marco.torres@hotmail.com', '1987-04-30');

-- Insert en la tabla medicamentos
INSERT INTO medicamentos (nombre, descripcion, cantidad, precio) VALUES
('Antiparasitario Canino', 'Elimina parásitos internos en perros', 50, 20.5),
('Desinflamatorio Felino', 'Reduce la inflamación en gatos', 30, 35.0),
('Antibiótico General', 'Antibiótico de amplio espectro para mascotas', 100, 45.0),
('Vacuna Rabia', 'Vacuna contra la rabia para perros y gatos', 200, 15.0),
('Analgésico para Dolor', 'Calma el dolor en mascotas', 75, 10.0);

-- Insert en la tabla mascotas
INSERT INTO mascotas (nombre, especie, raza, genero, edad, color) VALUES
('Firulais', 'Perro', 'Bulldog Francés', 'H', 3, 'Marrón'),
('Michi', 'Gato', 'Siames', 'M', 2, 'Gris'),
('Rocky', 'Perro', 'Labrador', 'H', 5, 'Negro'),
('Pelusa', 'Gato', 'Persa', 'M', 4, 'Blanco'),
('Thor', 'Perro', 'Pastor Alemán', 'H', 6, 'Dorado');

select * from mascotas;
select * from propietarios;
select * from veterinarios;
select * from medicamentos;

describe propietarios;
