INSERT INTO `roles`
VALUE (NULL, 'Usuario');

INSERT INTO `usuarios` (`rol_fk`, `email`, `password`)
VALUES (1, 'admin@admin.com', 'asdasd');

Insert into `usuarios` (`rol_fk`, `email`, `password`)
values (1, 'sara@za.com', 'dsadsa');


INSERT INTO `productos` (`usuario_fk`, `titulo`, `precio`, `imagen`, `imagen_descripcion`,`texto`, `fecha`)
VALUES(
	4,
	'Buzo',
    1500,
    'BuzoVerde.png',
    'Buzo color verde para correr',
    'Buzo térmico liviano para entrenar a la noche. Abriga y ocupa poco espacio a la hora de guardar.',
    '2021-11-03'
), (
	4,
	'Remera',
    900,
    'remeraNegra.png',
    'Remera color negra manga corta para running',
    'Remera Dri-Fit para una buena experiencia de entrenamiento donde el sudor no sea un peso para el cuerpo. Diseño simple con variante en su color.',
    '2021-11-03'
), (
	5,
	'Short',
    1200,
    'shortNegro.png',
    'Short color negro, hasta las rodillas, para salir a correr',
    'Short de entrenamiento. Cómodo, ligero y con suspensión interna para mayor comodidad a la hora de correr.',
    '2021-11-03'
), (
	4,
	'Calzas',
    900,
    'calzaNegra.png',
    'Calzas color negra y ajustada para correr en invierno',
    'Calzas unisex para entrenar en invierno y no mantener el cuerpo en una buena temperatura. Ideal para utilizar debajo de un short o pantalón.',
    '2021-11-03'
), (
	5,
	'Guantes',
    750,
    'guantesNegros.png',
    'Guantes para el frio color negro que tapan hasta la mitad de los dedos',
    'Guantes para correr en invierno. Con su velcro sobre la muñeca no es necesario que te preocupes por si se desajusta, siempre estarán firmes y mantendrán tus manos a una buena temperatura.',
    '2021-11-03'
), (
	4,
	'Bolso',
    5500,
    'bolsoNike.png',
    'Bolso para guardar tu ropa color camuflado',
    'Bolso ideal para llevar tu ropa de entrenamiento a cualquier lado. Con un compartimento central y dos pequeños en los costados, contiene suficiente espacio para toda la ropa y además poder guardar tus pertenencias como el celular, billetera o llaves.',
    '2021-11-03'
), (
	5,
	'Botella',
    1500,
    'botellaAzul.png',
    'Botella para entrenar color azul con tapa',
    'Botella térmica ideal para no perder la temperatura del contenido. Tamaño ideal y con un diseño único para que puedas engancharlo en donde quieras o simplemente llevarlo en la mano.',
    '2021-11-03'
), (
	4,
	'Porta Celular',
    600,
    'portaCelular.png',
    'Porta celulares para entrenar con belcro para atar en el brazo',
    'Un porta celular siempre es necesario ya que a la hora de correr no se utilizan los bolsillos del short/pantalón por su incomodidad. Con el porta celular te lo ajustas en el brazo y te olvidas del asunto.',
    '2021-11-03'
), (
	5,
	'Reloj',
    8000,
    'Reloj.png',
    'Reloj color negro especial para deportes',
    'Reloj especial para medir pulsaciones, distancia recorrida, velocidad promedio y cantidad de pasos.',
    '2021-11-03'
);
