-- geodetective.scoutgroup definition

CREATE TABLE `scoutgroup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL COMMENT 'Name der Gruppe',
  `country` varchar(100) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `contact` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL COMMENT 'Kontaktmöglickeiten:  Kurzwelle, DMR, Internet',
  `association` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL COMMENT 'Verband  z.B. DPSG, VDAPG,',
  `jid` varchar(6) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;