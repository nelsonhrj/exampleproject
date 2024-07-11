CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `cellphone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid_UNIQUE` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*
-- Query: select * from test.user
LIMIT 0, 50000

-- Date: 2024-07-11 19:03
*/
INSERT INTO `` (`userid`,`name`,`lastname`,`address`,`picture`,`cellphone`) VALUES (23,'Nelson','Hernandez','Roosvelt 3917','1720733815_8ca7e202e323fc63559e.png','1134407763');
