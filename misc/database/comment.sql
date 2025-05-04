-- geodetective.comment definition

CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `imageid` int DEFAULT NULL,
  `submitted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(1000) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT '0',
  `replytoid` int DEFAULT '0',
  `acceptedby` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci COMMENT='Kommentare zu Bildern';