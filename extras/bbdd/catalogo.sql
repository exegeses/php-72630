CREATE DATABASE catalogo;
USE catalogo;

CREATE TABLE `categorias` (
  `idCategoria` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `catNombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`),
  UNIQUE KEY `categorias_catnombre_unique` (`catNombre`)
) ENGINE=InnoDB AUTO_INCREMENT=7;


LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (5,'Cámaras Mirrorless'),(6,'Iluminación inteligente'),(2,'Parlantes Bluetooth'),(3,'Robot de limpieza'),(1,'Smartphone'),(4,'Smat TV');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

CREATE TABLE `marcas` (
  `idMarca` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `mkNombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idMarca`),
  UNIQUE KEY `marcas_mknombre_unique` (`mkNombre`)
) ENGINE=InnoDB AUTO_INCREMENT=11;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` VALUES (1,'Apple'),(10,'Blaupunkt'),(8,'Bose'),(4,'iRobot'),(3,'Marshall'),(7,'Nikon'),(9,'OnePlus'),(2,'Oppo'),(6,'Samsung'),(5,'Xiaomi');


CREATE TABLE `productos` (
  `idProducto` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `prdNombre` varchar(75) NOT NULL,
  `prdPrecio` decimal(9,2) unsigned NOT NULL,
  `idMarca` tinyint unsigned NOT NULL,
  `idCategoria` tinyint unsigned NOT NULL,
  `prdDescripcion` varchar(1000) NOT NULL,
  `prdImagen` varchar(45) NOT NULL,
  `prdActivo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idProducto`),
  KEY `productos_idmarca_foreign` (`idMarca`),
  KEY `productos_idcategoria_foreign` (`idCategoria`),
  CONSTRAINT `productos_idcategoria_foreign` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`),
  CONSTRAINT `productos_idmarca_foreign` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Oppo A78 Dual-SIM 128GB',200.00,2,1,'Smartphone Android con pantalla HD+ de 6.56 pulgadas. 8GB de RAM y 128GB de almacenamiento interno. Cámara trasera dual de 50MP. Cámara selfie es de 8MP. Batería de 5000 mAh con soporte para carga rápida de 33W.','Oppo-A78.png',1),(2,'iPhone 15 Pro',1000.00,1,1,'Apple iPhone 15 Pro con chasis fabricado en titanio y puerto USB-C. Pantalla OLED LTPO de 6.1 pulgadas y triple cámara posteriorde 48MP. Cámara frontal de 12MP con sensores para Face ID. Batería de carga rápida de 15W.','iPhone-15-pro.png',1),(3,'HomePod (2nd gen)',250.00,1,2,'El HomePod es un altavoz de alta fidelidad que combina sonido inmersivo, asistente personal y control de hogar inteligente. Conectividad Bluetooth y Wifi via Apple Music','homepod-2.png',1),(4,'Marshall Acton III',300.00,3,2,'El altavoz bluetooth Acton III Cuenta con Dynamic Loudness, que ajusta el equilibrio tonal del sonido para garantizar que su música suene brillante en todos los volúmenes. 30 Watts de potencia','marshall-acton-iii.png',1),(5,'Aspiradora Robot iRobot Roomba j7+',900.00,4,3,'Robot de limpieza Roomba J7+ con sistema de limpieza superior de tres fases y dos rodillos de silicona. Tecnología de trazado de mapas inteligente Imprint™ que aprende, crea mapas y se adapta a cada habitación.','roomba-j7.png',1),(6,'Xiaomi TV Q2',560.00,5,4,'Smart TV con panel QLED Quantum Dot Display de 55 pulgadas y resolución 4K UHD. Sonido Dolby VisionTM IQ y Dolby Atmos. Sistema operativo Google TV. 3 puertos HDMI 2.0, un puerto HDMI 2.1 eARC a 120 Hz, 2 USB 2.0, Wi-Fi 802.11, Bluetooth 5.0 y entrada de audio óptica','xiaomi-q2.jpg',1),(7,'Samsung TV Crystal UHD 2023',650.00,6,4,'Smart TV con panel LED de 65 pulgadas con resolución 4K, tasa de 50 Hz y retroiluminación LED. TizenOS integra altavoces de 20 W compatibles con Dolby Atmos. 3 puertos HDMI, 2 USB y salida óptica de audio, WiFi y Bluetooth.','samsung-crystal-65.png',1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
