-- geodetective.comment definition

CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `imageid` int DEFAULT NULL,
  `submitted` timestamp NULL DEFAULT NULL,
  `text` varchar(1000) COLLATE utf8mb4_de_pb_0900_ai_ci DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci COMMENT='Kommentare zu Bildern';
