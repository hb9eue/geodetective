-- geodetective.image definition

CREATE TABLE `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `eventid` int DEFAULT NULL,
  `userid` int DEFAULT NULL COMMENT 'Einreicher',
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `submitted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `accepted` tinyint(1) DEFAULT '0' COMMENT 'Freigabe durch Admin',
  `acceptedby` int DEFAULT NULL COMMENT 'Freigegeben von Userid',
  `accepttime` timestamp NULL DEFAULT NULL,
  `filename` varchar(100) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `solutiontext` varchar(1000) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `deadline` timestamp NULL DEFAULT '2035-12-31 00:00:00' COMMENT 'Spielbar bis',
  `ordernumber` int DEFAULT '10000' COMMENT 'Nummer zum Ändern der Reihenfolge der Bilder. Wenn 0 dann gilt das submitdatum als Ordungskriterium',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;