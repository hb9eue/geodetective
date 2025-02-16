-- geodetective.event definition

CREATE TABLE `event` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL COMMENT 'z.B. JOTA2025',
  `starttimestamp` timestamp NULL DEFAULT NULL COMMENT 'Beginn des Events',
  `endtimestamp` timestamp NULL DEFAULT NULL COMMENT 'Ende des Events',
  `publishinterval` int DEFAULT NULL COMMENT 'veröffentlichungsintervall in Stunden',
  `imagesperinterval` int DEFAULT NULL COMMENT 'Anzahl der Bilder die pro Intervall veröffentlicht werden',
  `submitfrom` timestamp NULL DEFAULT NULL COMMENT 'Zeitpunkt ab dem Bilder eingereicht werden dürfen',
  `submituntil` timestamp NULL DEFAULT NULL COMMENT 'Zeitpunkt bis zu dem Bilder eingereicht werden dürfen',
  `startnightsrest` time DEFAULT NULL,
  `endnightsrest` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;
