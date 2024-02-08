CREATE DATABASE Entregable_01;

USE Entregable_01;

-- TABLA USER;
CREATE TABLE User (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    dni CHAR(8) NOT NULL UNIQUE,
    name VARCHAR(60) NOT NULL,
    gmail VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

select * from user;

-- TABLA CATEGORY
CREATE TABLE Category (
    category_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) UNIQUE NOT NULL,
    image_url VARCHAR(255) UNIQUE NOT NULL
);

-- CATEGORIAS
INSERT INTO Category (name, image_url) VALUES 
("Naturaleza", "https://cdn-icons-png.flaticon.com/128/7105/7105028.png?ga=GA1.1.1490536797.1695424938"),
("Espacio", "https://cdn-icons-png.flaticon.com/128/2240/2240744.png"),
("Animales", "https://cdn-icons-png.flaticon.com/128/8334/8334302.png?ga=GA1.1.1490536797.1695424938&track=ais"),
("Halloween", "https://cdn-icons-png.flaticon.com/128/685/685842.png"),
("Ciudades", "https://cdn-icons-png.flaticon.com/128/3397/3397734.png"),
("Navidad", "https://cdn-icons-png.flaticon.com/128/613/613794.png"),
("Carro", "https://cdn-icons-png.flaticon.com/128/2555/2555021.png");


-- TABLA BACKGROUND
CREATE TABLE Background (
    background_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL UNIQUE,
    image_url VARCHAR(255) NOT NULL UNIQUE,
    upload_date DATE NOT NULL
);

INSERT INTO Background (title, image_url, upload_date) VALUES 
("Ciudad por la noche", "https://www.xtrafondos.com/wallpapers/ciudad-por-la-noche-estilo-anime-5480.jpg", NOW()),
("Ciudad futurista", "https://www.xtrafondos.com/wallpapers/paisaje-de-ciudad-futurista-artwork-4678.jpg", NOW()),
("Fuegos artificiales año nuevo", "https://www.xtrafondos.com/wallpapers/fuegos-artificiales-de-anos-nuevo-en-chicago-9160.jpg", NOW()),
("Kiosko en la ciudad", "https://www.xtrafondos.com/wallpapers/kiosko-en-medio-de-la-ciudad-10302.jpg", NOW()),
("Arboles junto al rio", "https://www.xtrafondos.com/wallpapers/arboles-en-el-otono-junto-a-rio-10756.jpg", NOW()),
("Arbol navideño en el bosque", "https://www.xtrafondos.com/wallpapers/arbol-de-navidad-en-medio-del-bosque-9049.jpg", NOW()),
("Caballos en el rio", "https://www.xtrafondos.com/wallpapers/caballos-en-el-rio-9823.jpg", NOW()),
("Nubes sobre la montaña de colores", "https://www.xtrafondos.com/wallpapers/nubes-sobre-las-montanas-de-arcoiris-vinicunca-7378.jpg", NOW()),
("Calabazas de halloween", "https://www.xtrafondos.com/wallpapers/calabazas-de-halloween-10928.jpg", NOW()),
("Anochecer en montaña y mar", "https://www.xtrafondos.com/wallpapers/anochecer-en-montana-y-mar-476.jpg", NOW()),
("Luna entre llamarada", "https://www.xtrafondos.com/wallpapers/la-luna-entre-llamarada-arte-digital-8646.jpg", NOW()),
("Planeta desde la luna", "https://www.xtrafondos.com/wallpapers/planeta-desde-la-luna-7708.jpg", NOW()),
("Planetas en el espacio", "https://www.xtrafondos.com/wallpapers/planetas-en-el-espacio-10032.jpg", NOW()),
("Paisaje de bosque con montañas", "https://www.xtrafondos.com/wallpapers/paisaje-de-bosque-con-montanas-y-lago-5932.jpg", NOW()),
("Samoyedo en lago y montañas", "https://www.xtrafondos.com/wallpapers/samoyedo-en-lago-y-montanas-3936.jpg", NOW()),
("Paisaje al amanecer", "https://www.xtrafondos.com/wallpapers/paisaje-de-lago-en-las-montanas-al-amanecer-7254.jpg", NOW()),
("Bote en el lago al atardecer", "https://www.xtrafondos.com/wallpapers/bote-en-lago-al-atardecer-5315.jpg", NOW()),
("Paisaje Rumania ", "https://www.xtrafondos.com/wallpapers/rumania-915.jpg", NOW()),
("Auto nissan rojo", "https://www.xtrafondos.com/wallpapers/nissan-pdb-r34-grt-9992.jpg", NOW()),
("Ciudad abandonada", "https://www.xtrafondos.com/wallpapers/escenario-de-the-last-of-us-11691.jpg", NOW()),
("Edificio en el atardecer", "https://www.xtrafondos.com/wallpapers/edificio-alto-en-el-atardecer-8569.jpg", NOW()),
("Colinas al atardecer", "https://www.xtrafondos.com/wallpapers/colinas-al-atardecer-2408.jpg", NOW()),
("Ciudad de Nueva York", "https://www.xtrafondos.com/wallpapers/nueva-york-por-la-manana-arte-digital-8817.jpg", NOW()),
("Puente Golden Gate ", "https://www.xtrafondos.com/wallpapers/puente-golden-gate-al-atardecer-8467.jpg", NOW()),
("Montaña en el bosque", "https://www.xtrafondos.com/wallpapers/montana-en-bosque-5769.jpg", NOW()),
("Tren en la ciudad", "https://www.xtrafondos.com/wallpapers/tren-en-una-ciudad-8292.jpg", NOW()),
("Bosque profundo", "https://www.xtrafondos.com/wallpapers/en-lo-profundo-del-bosque-1257.jpg", NOW()),
("Flor con gotas", "https://www.xtrafondos.com/wallpapers/flor-con-gotas-de-rocio-6691.jpg", NOW()),
("Caballos corriendo", "https://www.xtrafondos.com/wallpapers/caballos-corriendo-en-la-playa-al-atardecer-arte-digital-6970.jpg", NOW()),
("Via lactea en el lago", "https://www.xtrafondos.com/wallpapers/la-via-lactea-en-un-lago-1497.jpg", NOW()),
("Montañas frente al lago", "https://www.xtrafondos.com/wallpapers/montanas-frente-a-lago-en-el-bosque-9300.jpg", NOW()),
("Ciudad al atardecer", "https://www.xtrafondos.com/wallpapers/el-sonador-ciudad-al-atardecer-11724.jpg", NOW()),
("Ciudad frente al mar", "https://www.xtrafondos.com/wallpapers/torre-en-ciudad-frente-al-mar-10648.jpg", NOW()),
("Torre en la ciudad", "https://www.xtrafondos.com/wallpapers/torre-fernsehturm-en-berlin-2783.jpg", NOW()),
("Amanecer en London", "https://www.xtrafondos.com/wallpapers/amanecer-en-el-london-eye-7540.jpg", NOW()),
("Burbuja reflejando la ciudad", "https://www.xtrafondos.com/wallpapers/burbuja-reflejando-ciudad-11329.jpg", NOW()),
("Rascacielos", "https://www.xtrafondos.com/wallpapers/rascacielos-6261.jpg", NOW()),
("Una mañana en las montañas", "https://www.xtrafondos.com/wallpapers/una-manana-en-las-montanas-473.jpg", NOW()),
("Mercedes gris", "https://www.xtrafondos.com/wallpapers/mercedes-amg-gt-s-gris-en-montanas-2484.jpg", NOW()),
("Lago con montañas", "https://www.xtrafondos.com/wallpapers/lago-con-montanas-al-atardecer-6499.jpg", NOW()),
("Amanecer en un pueblo", "https://www.xtrafondos.com/wallpapers/amanecer-en-pequeno-pueblo-en-noruega-9671.jpg", NOW()),
("Arboles en otoño", "https://www.xtrafondos.com/wallpapers/arboles-en-bosque-durante-el-otono-11630.jpg", NOW()),
("Tigre en la nieve", "https://www.xtrafondos.com/wallpapers/tigre-caminando-en-la-nieve-10018.jpg", NOW()),
("Astronautas con mariposas", "https://www.xtrafondos.com/wallpapers/astronauta-con-mariposas-4841.jpg", NOW()),
("Gatos ojos azules", "https://www.xtrafondos.com/wallpapers/gato-con-ojos-azules-6560.jpg", NOW()),
("Luz de bengala", "https://www.xtrafondos.com/wallpapers/luz-de-bengala-al-atardecer-11585.jpg", NOW()),
("Costa con acantilados", "https://www.xtrafondos.com/wallpapers/costa-con-acatilados-2083.jpg", NOW()),
("Ciudad de Moscu Rusia", "https://www.xtrafondos.com/wallpapers/ciudad-de-moscu-rusia-4941.jpg", NOW()),
("Atardecer en la playa", "https://www.xtrafondos.com/wallpapers/atardecer-en-la-playa-con-palmas-6908.jpg", NOW()),
("Rio y montañas atardeciendo", "https://www.xtrafondos.com/wallpapers/rio-en-las-montanas-al-atardecer-9190.jpg", NOW()),
("Nubes sobre las montañas", "https://www.xtrafondos.com/wallpapers/nubes-sobre-las-montanas-8512.jpg", NOW()),
("Atardecer en chicago", "https://www.xtrafondos.com/wallpapers/atardecer-en-chicago-323.jpg", NOW()),
("Laguna al atardecer", "https://www.xtrafondos.com/wallpapers/playa-laguna-al-atardecer-6595.jpg", NOW()),
("Rosas con gotas de agua", "https://www.xtrafondos.com/wallpapers/petalos-de-rosa-con-gotas-de-agua-11334.jpg", NOW()),
("Paisaje nevado", "https://www.xtrafondos.com/wallpapers/atardecer-en-paisaje-nevado-arte-digital-7306.jpg", NOW()),
("Perro en el pasto", "https://www.xtrafondos.com/wallpapers/perro-en-el-pasto-5797.jpg", NOW());

-- TABLA Background_Category
CREATE TABLE Background_Category (
    background_id INT,
    category_id INT,
    PRIMARY KEY (background_id, category_id),
    FOREIGN KEY (background_id) REFERENCES Background(background_id),
    FOREIGN KEY (category_id) REFERENCES Category(category_id)
);

-- RELACIONES
INSERT INTO Background_Category (category_id, background_id) VALUES
(1,5),
(1,7),
(1,8),
(1,10),
(1,11),
(1,14),
(1,15),
(1,16),
(1,17),
(1,18),
(1,22),
(1,25),
(1,27),
(1,28),
(1,29),
(1,30),
(1,31),
(1,38),
(1,40),
(1,41),
(1,42),
(1,46),
(1,47),
(1,49),
(1,50),
(1,51),
(1,53),
(1,54),
(1,55),
(1,56),
(2,12),
(2,13),
(2,44),
(3,7),
(3,15),
(3,29),
(3,43),
(3,45),
(3,56),
(4,9),
(5,1),
(5,2),
(5,3),
(5,4),
(5,20),
(5,21),
(5,23),
(5,24),
(5,26),
(5,32),
(5,33),
(5,34),
(5,35),
(5,36),
(5,37),
(5,48),
(5,52),
(6,6),
(7,19),
(7,39);


-- SELECCIONAR FONDOS POR CATEGORY
SELECT b.*
FROM category c
INNER JOIN Background_Category bc ON c.category_id = bc.category_id
INNER JOIN background b ON bc.background_id = b.background_id
WHERE c.category_id = 2;
