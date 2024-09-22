-- Creacion de base de datos
DROP DATABASE IF EXISTS test;
CREATE DATABASE test;
-- Seleccion de la base de datos creada
USE test;

CREATE TABLE rol
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(50) NOT NULL
);

CREATE TABLE usuario
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    username   VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol_id   INT,
    FOREIGN KEY (rol_id) REFERENCES rol (id)
);
-- Crear la table
CREATE TABLE pokemon
(
    id                   INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificador VARCHAR(50),
    imagen               VARCHAR(255),
    nombre               VARCHAR(100),
    tipo                 TEXT,
    descripcion          TEXT,
    informacion          TEXT
);


-- Insertar Pokemones.-
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('PIK001', 'pikachu', 'Pikachu', 'Electrico',
        'Un pequeño Pokémon roedor que tiene electricidad almacenada en sus mejillas.', 'Pikachu es un pequeño Pokémon cuya morfología se encuentra basada en un roedor. Aunque su nombre y su categoría hagan alusión a un ratón, según su diseñadora, sus mejillas están basadas en las de una ardilla. Su cuerpo es de color amarillo con dos rayas marrones en su espalda y en la base de la cola. La punta de sus orejas de color negro, y presenta un gran círculo rojo en cada una de sus mejillas. Tiene una cola con forma de rayo si es macho y en forma de corazón si es hembra.
Pikachu almacena una gran cantidad de electricidad en las bolsas que tiene en sus mejillas. Estas parecen cargarse eléctricamente durante la noche mientras duerme. En ocasiones libera electricidad estando medio dormido, como si soñara que lanza descargas eléctricas. A veces suelta unas pequeñas descargas cuando se acaba de despertar. Las mejillas de Pikachu también pueden ser recargadas mediante una descarga eléctrica dada por otro Pikachu. Es un Pokémon muy curioso, por lo que se puede ver cerca de asentamientos humanos.
El hábitat principal de Pikachu es el bosque, alejado de las poblaciones humanas, donde puede encontrar bayas las cuales tuesta con su electricidad, por lo que si se encuentra una baya chamuscada tirada en el suelo, es muy probable que haya sido obra de Pikachu. Le gusta vivir en grupos, donde siempre mantienen la cola en alto para vigilar. En esta pose puede ser fácilmente alcanzado por algún rayo y si se siente amenazado o es molestado liberará toda la electricidad almacenada. La energía liberada de varios individuos juntos es capaz de generar tormentas eléctricas.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('CHA002', 'charmander', 'Charmander', 'Fuego', 'Un pequeño lagarto con una llama ardiente en su cola.', 'Charmander es un pequeño monstruo bípedo parecido a un lagarto. Sus características de fuego son resaltadas por su color de piel anaranjado y su cola, cuya punta está envuelta en llamas. Charmander y sus evoluciones, Charmeleon y Charizard, tienen una pequeña llama en la punta de sus colas desde que nacen. La intensidad con la que ésta arde es un indicador del estado de salud y emocional de este Pokémon: si la llama arde con mucha fuerza, indica que está completamente sano, y si arde muy levemente, significa que se encuentra débil. El Pokémon podría morir si la llama de su cola se apaga. Cuando son bebés aún no están familiarizados con el fuego, pudiendo llegar a quemarse a sí mismos.
Viven en grupos, cuidando las llamas de sus colas entre sí. Prefieren los lugares silenciosos y rocosos. En estos lugares si se presta mucha atención, se pueden llegar a escuchar el tenue chisporroteo de su llama. Los lugares secos y cálidos son mejores para ellos, por lo que frecuentemente son encontrados en cuevas o en las cercanías de volcanes y montañas. En la lluvia es fácil reconocerlos por el vapor que emana de su cola, la cual seguirá ardiendo aunque se moje un poco. Al dormir usan su cola para calentarse.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('BUL003', 'bulbasaur', 'Bulbasaur', 'Planta',
        'Un Pokémon que tiene una semilla en su lomo desde el día que nace.', 'Bulbasaur es un Pokémon cuadrúpedo de color verde, posee manchas de una tonalidad más oscura del mismo color con distintas formas geométricas. Su cabeza representa cerca de un tercio de su cuerpo. En su frente se ubican tres manchas que pueden cambiar de posición, forma o lugar dependiendo del ejemplar. Tiene como orejas muñones pequeños y puntiagudos. Sus ojos son grandes y de color rojo. Sus patas son cortas y posee tres garras en cada una. Este Pokémon tiene plantado un bulbo en el lomo desde que nace, esta semilla crece y se desarrolla a lo largo del ciclo de vida de Bulbasaur a medida que suceden sus evoluciones. El bulbo absorbe y almacena la energía solar que Bulbasaur necesita para hacer florecer el bulbo de su lomo y evolucionar en Ivysaur. Dicen que cuanta más luz consuma la semilla, más rápido crecerá y brotará, por lo que es muy común ver a este Pokémon tumbado echándose una siesta en lugares donde los rayos del sol lleguen a plenitud. Por otro lado, gracias a los nutrientes que el bulbo almacena, puede pasar varios días sin comer. Su cuerpo según a palabras de Ken Sugimori y Junichi Masuda en una entrevista, está basado en un anfibio (sapo o rana), al igual que toda su línea evolutiva.
El bulbo de Bulbasaur le ayuda a defenderse de los enemigos, y desde él puede disparar ataques tales como rayo solar y drenadoras entre otros movimientos.
No es muy raro encontrarlo en jardines y zonas cercanas a fuentes de agua. Se los puede atraer con el aroma de las flores. Según el anime, una vez al año, cuando estos Pokémon están listos para evolucionar suelen reunirse en grandes cantidades en un Jardín Misterioso mientras hacen un ritual a la luz de la luna junto a un gran Venusaur.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('SQU004', 'squirtle', 'Squirtle', 'Agua', 'Una pequeña tortuga que lanza chorros de agua desde su boca.', 'Squirtle tiene forma de una tortuga semiacuática de una tonalidad azulada, su caparazón es color café, las placas periféricas de color blanco y finalmente su plastrón de una tonalidad crema, posee una cola con la punta enrollada, además de tres dedos en cada una de sus extremidades, una boca con una punta en forma de pico característico de las tortugas y unos grandes ojos de tonalidad rojiza.
Al nacer su espalda se va hinchando hasta formarse un caparazón, al principio es blando y elástico, si lo golpeas este rebotará, pero conforme pasa el tiempo se irá endureciendo para resistir los ataques de cualquier amenaza, ocultándose dentro de él cuando siente peligro, al estar escondido puede lanzar una enorme presión de agua desde su interior cuando tiene la oportunidad. Igualmente retrae su cabeza y extremidades mientras duerme para sentirse seguro, a veces se puede llegar a ver como se mece su caparazón entre sueños. Su caparazón no solo le sirve de protección únicamente, con su forma redondeada y las hendiduras que posee, le sirven para reducir su resistencia en el agua y así poder nadar a enormes velocidades. Además de lanzar con gran precisión chorros de agua a presión por la boca, también puede lanzar espuma y usar su duro caparazón para atacar. Siempre se lo ve cerca del agua, ya sea dulce o salada.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('JIG005', 'jigglypuff', 'Jigglypuff', 'Normal',
        'Un Pokémon con forma de bola rosada que canta canciones de cuna para dormir a sus enemigos.', 'Jigglypuff tiene un cuerpo circular, rosa, esponjoso y acentuado con pequeños apéndices, así como una mota de cabello en su cabeza. Tiene unos enormes ojos azules y unas orejas puntiagudas.
Su ataque más popular es canto, que pone a dormir a sus oponentes. Su tesitura es de 12 octavas. En algunos estantes de los grandes almacenes, se encuentran discos con recopilaciones de canciones para dormir (nanas) de Jigglypuff. Tiene la extraña habilidad de inflar todo su cuerpo aspirando aire. Esto además le permite mantenerse en el aire durante unos segundos, ya que gracias a su fisionomía es capaz de flotar. Es de la especie globo, ya que en Pokémon Stadium si este es vencido se desinfla como un globo, además de que en varios medios se le ha visto flotar en el aire. Cuando le tiemblan sus grandes y adorables ojos redondos es un indicador de que comenzará a cantar, si se hincha antes de hacerlo puede cantar durante un tiempo mucho mayor. No deja de cantar ni estando dormido, por lo que hay que tener mucho cuidado de no oír su canción.
Este Pokémon puede ajustar el volumen de su voz, sin pausarse para respirar. Como resultado, cuando su oyente no muestra señales de sueño, continuará cantando hasta que haya usado todo su oxígeno, lo que puede ser un problema, ya que su vida puede correr peligro. Los Jigglypuff viven principalmente en zonas de pradera, aunque a veces pasea por las ciudades.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('GEN006', 'gengar', 'Gengar', 'Fantasma',
        'Un Pokémon que se esconde en las sombras y disfruta asustando a la gente.', 'Gengar está basado en el concepto del Doppelgänger y en la gente sombra. Gengar es un Pokémon con extremidades pequeñas. Tiene una personalidad siniestra y tenebrosa, sobre todo en estado salvaje. Se dice que por las noches sale a espantar y perder a los viajeros para robar sus almas.
Le gusta fingir que es una sombra, por la noche, para sorprender a la gente o a Pokémon perdidos. A veces Gengar termina cayendo en un sueño profundo mientras se oculta en la sombra de la presa que pretendía maldecir. Cuando una persona se acerca a él, se puede sentir el aura helada que lo rodea, ya que roba el calor de su alrededor haciendo descender unos 5 °C la temperatura del lugar. Como otros Pokémon de tipo fantasma, posee la tétrica, pero igualmente enigmática cualidad de que siempre se le ve sonriente, de una manera siniestra y espeluznante aun cuando está inconsciente o es derrotado en combate, como si se burlara. Se cree que es una forma que tiene para intimidar a sus rivales, haciéndoles creer que sin importar cuantos golpes reciba, siempre se encuentra en un buen estado, aunque en realidad no sea así. Los padres en varias partes del mundo usan a Gengar como amenaza para que sus hijos se porten bien, diciéndoles que si estos se portan mal, un Gengar vendrá a por ellos.
Aunque tenga piernas, Gengar puede usar la levitación. Dicen que por las noches invocan espíritus malignos para que a todo el mundo le ocurran desgracias e infortunios. Viven en cementerios y lugares abandonados para que nadie los moleste. A menudo van acompañados de sus preevoluciones.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('VAP007', 'vaporeon', 'Vaporeon', 'Agua', 'Un Pokémon con una estructura corporal similar a la del agua.', 'Si a Eevee se le expone a una piedra agua, evoluciona en Vaporeon. El cuerpo de Vaporeon es mayormente azul. Tiene unas orejas amarillas puntiagudas, cuando estas comienzan a vibrar es un indicador de que comenzará a llover en las próximas horas. Posee una aleta en la cabeza parecida a la de un pez vela, y una membrana de un estilo similar que rodea su cuello. Tiene una hilera de picos membranosos en la columna vertebral que se extienden a lo largo de su espalda.
Su constitución física está adaptada a la subsistencia en agua, principalmente, gracias a su cola rematada por una aleta parecida a la de las sirenas que le ayuda a nadar. Debido a la forma de su cola, algunas veces es confundido con una de ellas, otros creen que es el origen de los cuentos de las sirenas. No resulta fácil verlo cuando nada, debido a que es confundido con el agua por el tono azulado de su piel, desprovista de pelaje. Además de que tiene la capacidad única de volverse invisible dentro del agua, esto debido a que sus moléculas son muy similares a las del agua lo que le permite fundirse en ella. Su poder en este medio es tal que puede controlar las aguas. Su método de caza es mimetizarse con el agua para esperar pacientemente a que un Pokémon pez aparezca y se acerque lo suficiente para atraparlo. Si advierte que hay peligro o un enemigo, se sumergirá bajo el agua para ocultarse. Solo cuando se encuentra dormido en tierra firme se le puede ver de cerca.
Siempre vive cerca del agua, ya sea en ríos o mares siempre y cuando sea agua limpia, fresca y cristalina, en los mares es visto en las bellas costas de estos, son sus lugares preferidos. Les gusta esconderse en agujeros dentro del agua.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('ALA008', 'alakazam', 'Alakazam', 'Psiquico',
        'Un Pokémon con una inteligencia y habilidades psíquicas extraordinarias.', 'Alakazam es un Pokémon que se caracteriza por tener un gran poder mental. Posee dos cucharas, una en cada mano, que aumentan sus poderes psíquicos, a diferencia de su preevolución Kadabra, que solo tenía una. En el anime, Alakazam canaliza los movimientos con sus cucharas para atacar a sus oponentes y estás pueden doblarse ante un poder psíquico mayor. Sus orejas se han transformado en dos enormes cuernos y de su cabeza sobresalen unos bigotes, los cuales son más largos en los machos que en las hembras, su cerebro nunca deja de crecer y el número de neuronas no deja de aumentar, por ello le cuesta sostener el peso de la cabeza, para hacerlo utiliza sus poderes psicoquinéticos. Su cuerpo es de tonalidad amarilla, solo siendo marrón en el área de su pecho, hombros, antebrazos y rodillas. A diferencia de Abra y Kadabra, este Pokémon pierde totalmente su cola adquiriendo un aspecto más humanoide.
Este Pokémon es sumamente inteligente, alcanzando un coeficiente intelectual de 5000, es comparable al de un súper-ordenador, jamás olvidará todo lo aprendido, archivando en su memoria todas las vivencias que ha tenido desde el momento de su nacimiento. Sin embargo, este Pokémon tiene una musculatura muy débil, odia usar ataques físicos y se mueve usando sus poderes psíquicos para levitar. Cuando cierra los ojos puede aumentar sus sentidos, haciendo que pueda usar sus habilidades al máximo, al combatir identifica instantáneamente las debilidades de su oponente, y si alguien se le acerca demasiado puede sufrir una gran jaqueca por los poderes psíquicos que rezuman de su cabeza. Las cucharas que tiene las crea a partir de sus poderes psíquicos, por lo tanto cada una de ellas es única en el mundo. Cuando traba amistad con alguien, este Pokémon le obsequiará una de sus cucharas, se dice que todo lo que se coma con ella tendrá un sabor exquisito.');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('DRA009', 'dragonite', 'Dragonite', 'Dragon',
        'Un Pokémon que se dice que ha volado alrededor del mundo en solo 16 horas.', 'Es un Pokémon bípedo, que mide más de dos metros de altura. De color naranja claro, con su estómago y la parte inferior de la cola de color amarillo crema, tiene dos alas pequeñas en comparación con el robusto y musculoso cuerpo que tiene, que le permiten volar velozmente llegando a una velocidad más rápida que la del sonido y ser muy hábil controlando esta habilidad. Sus patas son grandes, musculosas y proveen un firme agarre al suelo cuando está parado, además de contar con tres garras por pie. No tiene lo que se consideraría manos, pero al final de sus brazos dispone de garras que pueden usar a manera de dedos.
Dragonite es un Pokémon dragón, conocido como el "Avatar del Mar". Además, al igual que su preevoluciones, es un Pokémon de buen corazón que gusta de volar por el océano rescatando náufragos sean personas o Pokémon y guiando barcos perdidos a punto de zozobrar en las tormentas hasta la costa, debido a su constitución puede volar desafiando las más fieras tempestades sin sufrir daño aparente. A pesar de ser pacífico por naturaleza, si alguien osa hacerlo enfadar, no sé calmará hasta haber destruido todo a su alrededor. Se trata de un Pokémon sumamente raro de ver y su inteligencia es comparable con la inteligencia humana. Debido a su fama, muchos capitanes han decidido usar tallas con forma de Dragonite como mascarón de proa en sus barcos. Si se encuentra totalmente exhausto, se le puede ver dormido con el vientre expuesto.
Aunque sea un Pokémon grande, pesado y sus alas sean un tanto pequeñas, es capaz de darle la vuelta al mundo en tan solo 16 horas. Se dice que el único lugar donde se puede encontrar este Pokémon en estado salvaje es en la Isla Dragonite, un lugar perdido en el mar del cual solo se han oído rumores de los náufragos que han sido rescatados por este Pokémon, esta isla solo es habitada por Dragonite y sus preevoluciones.
');
INSERT INTO pokemon (numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES ('SNO010', 'snorlax', 'Snorlax', 'Normal',
        'Un Pokémon extremadamente perezoso que duerme todo el día y come sin parar cuando está despierto.', 'Snorlax tiene un cuerpo que se compone principalmente por su vientre, ya que sólo se despierta para comer y rara vez hace ejercicios. Su cabeza es grande, y tiene dos dientes puntiagudos que sobresalen. Sus pies son muy grandes con el fin de proporcionar equilibrio en comparación con la mayoría de Pokémon. Sus brazos son cortos, sin embargo, son lo suficientemente largos como para llegar a coger su alimento, agarrar su almuerzo y ponerlo en su boca. Snorlax tiene un vientre grande que proporciona grandes cantidades de defensa. Es de color azul oscuro y en el medio de la barriga color crema.
Snorlax come muchísimos kilos de comida al día, lo único que hará será echarse a dormir hasta que vuelva a despertarse por el hambre. Cuando este Pokémon duerme, si por alguna razón lo despiertan, se enfadará mucho y atacará ferozmente, aunque después de un rato se volverá a dormir. También si se despierta puede confundir lo primero que ve con comida. Al parecer, Snorlax tiene la habilidad de hacer que los árboles crezcan más rápidamente después de destruirlos y comerse su fruta. Los Snorlax se comen todo lo que es comestible, no son realmente muy exigentes, ya que sus jugos digestivos pueden disolver cualquier cosa, hasta los venenos, por lo que no importa si la comida ya está en mal estado o tirada en el suelo. Al encontrar algo nuevo en su territorio, un Snorlax lo pondrá en su boca para ver si es algo que se puede comer. A medida que engorda se vuelve más perezoso, algunos creen que el grito que emite es en realidad su ronquido y otros que es el rugido de su estómago hambriento. Se trata de un Pokémon dócil, muchos niños suelen usar su gran panza como lugar de juegos, aunque hay que tener cuidado de no ser aplastado cuando este se giré.
Snorlax tiene siempre los ojos cerrados incluso estando despierto, por lo que es muy difícil verle con los ojos abiertos. Solo se le ha visto con los ojos abiertos en su animación de regresión a la Poké Ball de Pokémon Stadium. Snorlax se encuentra a menudo en las montañas y los bosques. Sin embargo, a veces deambula en las calles de las ciudades, incluso llega a dormir en ellas cortando el tráfico violentamente.');


INSERT INTO rol (description)
values ('admin');
INSERT INTO rol (description)
values ('user');

-- Insertar valores en tabla login
INSERT INTO usuario (username, password, rol_id)
VALUES ('admin', 'admin', 1);
INSERT INTO usuario (username, password, rol_id)
VALUES ('agustina', '123456', 2);
INSERT INTO usuario (username, password, rol_id)
VALUES ('facundo', '123456', 2);
INSERT INTO usuario (username, password, rol_id)
VALUES ('ezequiel', '123456', 2);


