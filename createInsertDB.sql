CREATE DATABASE createdb;

Create TABLE `Instance` ( /*getting from javascript*/
    `Wifi_speed` INT,
    `Download` Bool, /*download=true upload=false*/
    `Instance_id` char(10),
    `GPS_location` VARCHAR(20),
    `Number_id` INT,
    PRIMARY KEY (Instance_id) 
);

Create TABLE `Location` (
    `GPS_location` varchar(20), /*getting from javascript*/
    `Building_name` varchar(50),
    `Floor` varchar(3),
    `Room_number` varchar(10),
    `Street_adress` varchar(15),
    Primary Key (GPS_location)
);

CREATE TABLE `Contributor` (
    `Pass` CHAR(15),
    `Access_type` VARCHAR(10),
    `Username` VARCHAR(15),
    `Number_id` INT,
    `Email` VARCHAR(20),
    `Comp_id` VARCHAR(10),
    PRIMARY KEY (Number_id)
);
    
CREATE TABLE `Comp_type` ( /*getting from javascript*/
	`Computer_id` varchar(10),
    `Mac` BOOLEAN,
    `Windows` BOOLEAN,
    `Linux` BOOLEAN,
    `Desktop` BOOLEAN,
    `Laptop` BOOLEAN,
    PRIMARY KEY (Computer_id)
);

/*------------------------------------User and Computer 1------------------------------*/
INSERT INTO `Contributor` VALUES ('NadiaIsSoCool','admin','Nadia',1,'sophia_b@gwmail.gwu.edu',27);
INSERT INTO  `Comp_type` VALUES (27,TRUE,FALSE,FALSE,FALSE,TRUE);

/*------------------------------------User and Computer 2------------------------------*/
INSERT INTO `Contributor` VALUES ('MariaIsSoCool','admin','Maria',2,'msinagra@gwmail.gwu.edu',666);
INSERT INTO  `Comp_type` VALUES (666,TRUE,FALSE,FALSE,FALSE,TRUE);

/*------------------------------------User and Computer 3------------------------------*/
INSERT INTO `Contributor` VALUES ('SiIsSoCool','admin','Si',3,'sichen@gwmail.gwu.edu',69);
INSERT INTO  `Comp_type` VALUES (69,TRUE,FALSE,FALSE,FALSE,TRUE);

/*------------------------------------User and Computer 4------------------------------*/
INSERT INTO `Contributor` VALUES ('LeslieIsSoCool','admin','Nadia',4,'leslie0523@gwmail.gwu.edu',18);
INSERT INTO  `Comp_type` VALUES (18,FALSE,TRUE,FALSE,FALSE,TRUE);

/*------------------------------------User and Computer 5------------------------------*/
INSERT INTO `Contributor` VALUES ('AlexeyIsSoCool','user','Alexey',5,'idk@gwmail.gwu.edu',40);
INSERT INTO  `Comp_type` VALUES (40,FALSE,FALSE,TRUE,TRUE,FALSE);

/*-------------------------------------------LOCATION ONE------------------------------*/
INSERT INTO `Location` VALUES ('@38.6740459,-76.2972025,8z', 'Science and Engineering Hall', 'B', 'atrium','800 22nd St NW');
INSERT INTO `Instance` VALUES (67,TRUE,1,'@38.6740459,-76.2972025,8z',1);
INSERT INTO `Instance` VALUES (37,TRUE,2,'@38.6740459,-76.2972025,8z',1);
INSERT INTO `Instance` VALUES (53,TRUE,3,'@38.6740459,-76.2972025,8z',1);
INSERT INTO `Instance` VALUES (67,TRUE,4,'@38.6740459,-76.2972025,8z',1);
INSERT INTO `Instance` VALUES (74,TRUE,5,'@38.6740459,-76.2972025,8z',4);
INSERT INTO `Instance` VALUES (8,False,6,'@38.6740459,-76.2972025,8z',4);
INSERT INTO `Instance` VALUES (8,False,7,'@38.6740459,-76.2972025,8z',4);
INSERT INTO `Instance` VALUES (5,False,8,'@38.6740459,-76.2972025,8z',1);
INSERT INTO `Instance` VALUES (8,False,9,'@38.6740459,-76.2972025,8z',1);

/*-------------------------------------------LOCATION 2------------------------------*/
INSERT INTO `Location` VALUES ('@38.9004253,-77.0490599,21z', 'Science and Engineering Hall', '1', 'entry','800 22nd St NW');
INSERT INTO `Instance` VALUES (62,TRUE,10,'@38.9004253,-77.0490599,21z',1);
INSERT INTO `Instance` VALUES (100,TRUE,11,'@38.9004253,-77.0490599,21z',3);
INSERT INTO `Instance` ALUES (36,TRUE,12,'@38.9004253,-77.0490599,21z',3);
INSERT INTO `Instance` VALUES (105,TRUE,13,'@38.9004253,-77.0490599,21z',1);
INSERT INTO `Instance` VALUES (16,FALSE,14,'@38.9004253,-77.0490599,21z',3);
INSERT INTO `Instance` VALUES (17,FALSE,15,'@38.9004253,-77.0490599,21z',1);
INSERT INTO `Instance` VALUES (18,FALSE,16,'@38.9004253,-77.0490599,21z',1);
INSERT INTO `Instance` VALUES (38,TRUE,17,'@38.9004253,-77.0490599,21z',1);
INSERT INTO `Instance` VALUES (19,FALSE,18,'@38.9004253,-77.0490599,21z',1);

/*-------------------------------------------LOCATION 3------------------------------*/
INSERT INTO `Location` VALUES ('@38.9000607,-77.0485127,21z', 'Phillips Hall', '1', '112','801 22nd St NW');
INSERT INTO `Instance` VALUES (65,TRUE,19,'@38.9000607,-77.0485127,21z',2);
INSERT INTO `Instance` VALUES (77,TRUE,20,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (94,TRUE,21,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (90,TRUE,22,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (115,TRUE,23,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (10,False,24,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (15,False,25,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (20,False,26,'@38.9000607,-77.0485127,21z',1);
INSERT INTO `Instance` VALUES (18,False,27,'@38.9000607,-77.0485127,21z',2);
INSERT INTO `Instance` VALUES (18,False,28,'@38.9000607,-77.0485127,21z',2);

/*-------------------------------------------LOCATION 4------------------------------*/
INSERT INTO `Location` VALUES ('@38.8994105,-77.048447,21z', 'Starbucks', '1', 'front','2130 H Street NW');
INSERT INTO `Instance` VALUES (34,TRUE,29,'@38.8994105,-77.048447,21z',2);
INSERT INTO `Instance` VALUES (30,TRUE,30,'@38.8994105,-77.048447,21z',2);
INSERT INTO `Instance` VALUES (34,TRUE,31,'@38.8994105,-77.048447,21z',2);
INSERT INTO `Instance` VALUES (27,TRUE,32,'@38.8994105,-77.048447,21z',2);
INSERT INTO `Instance` VALUES (26,TRUE,33,'@38.8994105,-77.048447,21z',2);
INSERT INTO `Instance` VALUES (54,TRUE,34,'@38.8994105,-77.048447,21z',2);
INSERT INTO `Instance` VALUES (7,False,35,'@38.8994105,-77.048447,21z',1);
INSERT INTO `Instance` VALUES (17,False,36,'@38.8994105,-77.048447,21z',1);
INSERT INTO `Instance` VALUES (17,False,37,'@38.8994105,-77.048447,21z',1);
INSERT INTO `Instance` VALUES (13,False,38,'@38.8994105,-77.048447,21z',4);
INSERT INTO `Instance` VALUES (13,False,39,'@38.8994105,-77.048447,21z',4);

/*-------------------------------------------LOCATION 5------------------------------*/
INSERT INTO `Location` VALUES ('@38.8992414,-77.0481714,21z', 'Gelman Library', '2', 'Lobby','2130 H Street NW');
INSERT INTO `Instance` VALUES (75,TRUE,40,'@38.8992414,-77.0481714,21z',3);
INSERT INTO `Instance` VALUES (30,TRUE,41,'@38.8992414,-77.0481714,21z',3);
INSERT INTO `Instance` VALUES (13,TRUE,42,'@38.8992414,-77.0481714,21z',3);
INSERT INTO `Instance` VALUES (102,TRUE,43,'@38.8992414,-77.0481714,21z',3);
INSERT INTO `Instance` VALUES (92,TRUE,44,'@38.8992414,-77.0481714,21z',3);
INSERT INTO `Instance` VALUES (13,FALSE,45,'@38.8992414,-77.0481714,21z',4);
INSERT INTO `Instance` VALUES (19,FALSE,46,'@38.8992414,-77.0481714,21z',4);
INSERT INTO `Instance` VALUES (16,FALSE,47,'@38.8992414,-77.0481714,21z',4);
INSERT INTO `Instance` VALUES (19,FALSE,48,'@38.8992414,-77.0481714,21z',4);
INSERT INTO `Instance` VALUES (22,FALSE,49,'@38.8992414,-77.0481714,21z',4);
INSERT INTO `Instance` VALUES (11,FALSE,50,'@38.8992414,-77.0481714,21z',4);
