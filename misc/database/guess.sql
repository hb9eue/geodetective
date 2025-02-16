-- geodetective.guess definition

CREATE TABLE `guess` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imageid` int DEFAULT NULL,
  `userid` int DEFAULT NULL,
  `submitted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `guessedjid` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;
