use learn_english;

DROP TABLE IF EXISTS `sentences`;
CREATE TABLE `sentences` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
   `sentence` varchar(1024) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


