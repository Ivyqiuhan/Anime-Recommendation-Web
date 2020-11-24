DROP DATABASE IF EXISTS `cs304`;
CREATE DATABASE `cs304`;
USE `cs304`;

CREATE TABLE `User` (
  `User_id` INT(11) NOT NULL AUTO_INCREMENT,
  `User_name` VARCHAR(255) NOT NULL UNIQUE,
  `Password` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(255)  UNIQUE,
  `Phone_number` BIGINT UNIQUE,
  PRIMARY KEY (`User_id`)
); 
INSERT INTO `User` VALUES (1,'Admin','Admin','he0qiuhan@gmail.com',2369828100);
INSERT INTO `User` VALUES (2,'William1','123456','wenhan.wu26@gmail.com',2369828101);
INSERT INTO `User` VALUES (3,'Khan1','123456','zikangzheng@gmail.com',2369828102);
INSERT INTO `User` VALUES (4,'Ivy2','123456','he0qiuhan2@gmail.com',2369828103);
INSERT INTO `User` VALUES (5,'William2','123456','wenhan.wu262@gmail.com',2369828104);
INSERT INTO `User` VALUES (6,'Khan2','123456','zikangzheng2@gmail.com',2369828105);


CREATE TABLE `Merchandise` (
  `Merchandise_id` INT(11) NOT NULL AUTO_INCREMENT,
  `Price` INT NOT NULL UNIQUE,
  `Name` VARCHAR(255)  UNIQUE,
  `Category` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`Merchandise_id`)
); 
INSERT INTO `Merchandise` VALUES (1,44.9,'POKEMON EVEE & EEVEELUTIONS MINI BACKPACK','BACKPACK');
INSERT INTO `Merchandise` VALUES (2,16.9,'NARUTO SHIPPUDEN AKATSUKI CLOUD STRIPE BEANIE','BEANIE');
INSERT INTO `Merchandise` VALUES (3,49.9,'DRAGON BALL Z CHARACTERS WOVEN BUTTON-UP','BUTTON-UP');
INSERT INTO `Merchandise` VALUES (4,26.9,'BANPRESTO DEMON SLAYER: KIMETSU NO YAIBA VOL. 5 GIYU TOMIOKA','COLLECTIBLE FIGURE');
INSERT INTO `Merchandise` VALUES (5,18.9,'POKEMON POKE BALL GLASSES CASE','GLASSES CASE');
INSERT INTO `Merchandise` VALUES (6,19.9,'POKEMON PIKACHU & POKE BALL ORNAMENT SET','COLLECTIBLE FIGURE');


CREATE TABLE `BroadcastPlatform` (
  `Platform_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) UNIQUE,
  `URL` VARCHAR(255) UNIQUE,
  PRIMARY KEY (`Platform_ID`)
); 
INSERT INTO `BroadcastPlatform` VALUES (1,'Youtube','https://www.youtube.com/');
INSERT INTO `BroadcastPlatform` VALUES (2,'Bilibili','https://www.bilibili.com/');
INSERT INTO `BroadcastPlatform` VALUES (3,'Netflix','https://www.netflix.com/ca/');
INSERT INTO `BroadcastPlatform` VALUES (4,'Amazon Prime','www.primevideo.com');
INSERT INTO `BroadcastPlatform` VALUES (5,'funimation','www.funimation.com');
INSERT INTO `BroadcastPlatform` VALUES (6,'Google Play','play.google.com');

CREATE TABLE `Anime` (
  `Anime_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Publish_date` DATE,
  `Episode` INT,
  `Name` VARCHAR(255),
  `Genre` VARCHAR(255),
  PRIMARY KEY (`Anime_id`)
); 
INSERT INTO `Anime` VALUES (1,20090405,64,'Fullmetal Alchemist: Brotherhood','Action');
INSERT INTO `Anime` VALUES (2,20110406,24,'Steins;Gate','Sci-Fi');
INSERT INTO `Anime` VALUES (3,20150408,51,'Gintama','Comedy');
INSERT INTO `Anime` VALUES (4,20201031,11,'Tian Guan Ci Fu','Drama');
INSERT INTO `Anime` VALUES (5,19920403,1000,'Crayon Shin-chan','School');
INSERT INTO `Anime` VALUES (6,20190406,26,'Demon Slayer','Demons');



CREATE TABLE `AnimeRank` (
  `Anime_ID` INT(11),
  `Rank_ID` VARCHAR(255),
  `Anime_Rank` INT,
  `Broadcast_website` VARCHAR(255),
  `Category_name` VARCHAR(255),
  PRIMARY KEY (`Anime_id`,`Rank_id`),
  CONSTRAINT `Rank_id` 
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`)ON DELETE CASCADE,
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON UPDATE CASCADE
); 
#'Fullmetal Alchemist: Brotherhood','Action'
INSERT INTO `AnimeRank` VALUES (1,1,1,'Bilibili','Total Rank');
INSERT INTO `AnimeRank` VALUES (1,2,4,'Youtube','Popularity');
#'Steins;Gate'
INSERT INTO `AnimeRank` VALUES (2,1,2,'Bilibili','Total Rank');
INSERT INTO `AnimeRank` VALUES (2,2,8,'Youtube','Popularity');
#'Gintama'
INSERT INTO `AnimeRank` VALUES (3,1,3,'Bilibili','Total Rank');
INSERT INTO `AnimeRank` VALUES (3,2,331,'Youtube','Popularity');
#'Tian Guan Ci Fu'
INSERT INTO `AnimeRank` VALUES (4,1,44,'Bilibili','Total Rank');
INSERT INTO `AnimeRank` VALUES (4,2,3905,'Youtube','Popularity');
#'Crayon Shin-chan'
INSERT INTO `AnimeRank` VALUES (5,1,1040,'Bilibili','Total Rank');
INSERT INTO `AnimeRank` VALUES (5,2,2066,'Youtube','Popularity');
#'Demon Slayer'
INSERT INTO `AnimeRank` VALUES (6,1,49,'Bilibili','Total Rank');
INSERT INTO `AnimeRank` VALUES (6,2,36,'Youtube','Popularity');


CREATE TABLE `Creator` (
  `Creator_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Type` VARCHAR(255),
  `Name` VARCHAR(255),
  `Company` VARCHAR(255),
  PRIMARY KEY (`Creator_ID`)
); 
INSERT INTO `Creator` VALUES (1,'VoiceActor','Hanae, Natsuki','https://columbia.jp/hanaenatsuki/');
INSERT INTO `Creator` VALUES (2,'VoiceActor','Kitou, Akari','https://kitoakari.com/');
INSERT INTO `Creator` VALUES (3,'VoiceActor','Takayama, Minami','https://ameblo.jp/number-373');
INSERT INTO `Creator` VALUES (4,'Musician','the High-Lows','Mune ga Dokidoki');
INSERT INTO `Creator` VALUES (5,'Musician','Sukima Switch','Golden Time Lover');
INSERT INTO `Creator` VALUES (6,'Musician','Lisa', 'Gurenge');


CREATE TABLE `VoiceActor` (
  `Creator_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Voice_ID` INT(11) NOT NULL UNIQUE,
  `Voice_Type` VARCHAR(255),
  `Name` VARCHAR(255),
  `Company` VARCHAR(255),
  PRIMARY KEY (`Creator_ID`,`Voice_ID`),
  CONSTRAINT `Voice_ID` FOREIGN KEY (`Creator_ID`) REFERENCES `Creator` (`Creator_ID`)ON DELETE CASCADE,
  FOREIGN KEY (`Creator_ID`) REFERENCES `Creator` (`Creator_ID`) ON UPDATE CASCADE
); 
INSERT INTO `VoiceActor` VALUES (1,1,'Male','Hanae, Natsuki','https://columbia.jp/hanaenatsuki/');
INSERT INTO `VoiceActor` VALUES (2,2,'Female','Kitou, Akari','https://kitoakari.com/');
INSERT INTO `VoiceActor` VALUES (3,3,'Male','Takayama, Minami','https://ameblo.jp/number-373');


CREATE TABLE `Musician` (
  `Creator_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Music_ID` INT(11) NOT NULL UNIQUE,
  `Music_Type` VARCHAR(255),
  PRIMARY KEY (`Creator_ID`,`Music_ID`),
  CONSTRAINT `Music_ID` FOREIGN KEY (`Creator_ID`) REFERENCES `Creator` (`Creator_ID`)ON DELETE CASCADE,
  FOREIGN KEY (`Creator_ID`) REFERENCES `Creator` (`Creator_ID`) ON UPDATE CASCADE
); 
INSERT INTO `Musician` VALUES (4,1,'Opening Theme');
INSERT INTO `Musician` VALUES (5,2,'Opening Theme');
INSERT INTO `Musician` VALUES (6,3,'Ending Theme');



CREATE TABLE `Buy` (
  `User_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Merchandise_ID` INT(11) NOT NULL UNIQUE,
  `Confirm_Number` INT,
  PRIMARY KEY (`User_ID`,`Merchandise_ID`),
  #CONSTRAINT `Music_ID` 
  FOREIGN KEY (`User_ID`) REFERENCES `User` (`User_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`User_ID`) REFERENCES `User` (`User_ID`) ON UPDATE CASCADE,
  FOREIGN KEY (`Merchandise_ID`) REFERENCES `Merchandise` (`Merchandise_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Merchandise_ID`) REFERENCES `Merchandise` (`Merchandise_ID`) ON UPDATE CASCADE
); 
INSERT INTO `Buy` VALUES (1,1,11);
INSERT INTO `Buy` VALUES (1,2,12);
INSERT INTO `Buy` VALUES (1,3,13);
INSERT INTO `Buy` VALUES (2,4,14);
INSERT INTO `Buy` VALUES (2,5,15);
INSERT INTO `Buy` VALUES (3,6,16);


CREATE TABLE `Produce` (
  `Anime_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Merchandise_ID` INT(11) NOT NULL UNIQUE,
  PRIMARY KEY (`Anime_ID`,`Merchandise_ID`),
  #CONSTRAINT `Music_ID` 
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON UPDATE CASCADE,
  FOREIGN KEY (`Merchandise_ID`) REFERENCES `Merchandise` (`Merchandise_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Merchandise_ID`) REFERENCES `Merchandise` (`Merchandise_ID`) ON UPDATE CASCADE
); 
INSERT INTO `Produce` VALUES (1,6);
INSERT INTO `Produce` VALUES (2,2);
INSERT INTO `Produce` VALUES (3,5);
INSERT INTO `Produce` VALUES (4,4);
INSERT INTO `Produce` VALUES (5,1);
INSERT INTO `Produce` VALUES (6,3);


CREATE TABLE `Watch` (
  `Anime_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `User_ID` INT(11) NOT NULL UNIQUE,
  PRIMARY KEY (`Anime_ID`,`User_ID`),
  #CONSTRAINT `Music_ID` 
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON UPDATE CASCADE,
  FOREIGN KEY (`User_ID`) REFERENCES `User` (`User_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`User_ID`) REFERENCES `User` (`User_ID`) ON UPDATE CASCADE
); 
INSERT INTO `Watch` VALUES (1,6);
INSERT INTO `Watch` VALUES (2,2);
INSERT INTO `Watch` VALUES (3,5);
INSERT INTO `Watch` VALUES (4,4);
INSERT INTO `Watch` VALUES (5,1);
INSERT INTO `Watch` VALUES (6,3);

CREATE TABLE `Create` (
  `Anime_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Creator_ID` INT(11) NOT NULL UNIQUE,
  PRIMARY KEY (`Anime_ID`,`Creator_ID`),
  #CONSTRAINT `Music_ID` 
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON UPDATE CASCADE,
  FOREIGN KEY (`Creator_ID`) REFERENCES `Creator` (`Creator_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Creator_ID`) REFERENCES `Creator` (`Creator_ID`) ON UPDATE CASCADE
); 
INSERT INTO `Create` VALUES (1,6);
INSERT INTO `Create` VALUES (2,2);
INSERT INTO `Create` VALUES (3,5);
INSERT INTO `Create` VALUES (4,4);
INSERT INTO `Create` VALUES (5,1);
INSERT INTO `Create` VALUES (6,3);

CREATE TABLE `PlayOn` (
  `Anime_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Platform_ID` INT(11) NOT NULL UNIQUE,
  PRIMARY KEY (`Anime_ID`,`Platform_ID`),
  #CONSTRAINT `Music_ID` 
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Anime_ID`) REFERENCES `Anime` (`Anime_ID`) ON UPDATE CASCADE,
  FOREIGN KEY (`Platform_ID`) REFERENCES `BroadcastPlatform` (`Platform_ID`) ON DELETE CASCADE,
  FOREIGN KEY (`Platform_ID`) REFERENCES `BroadcastPlatform` (`Platform_ID`) ON UPDATE CASCADE
); 
INSERT INTO `PlayOn` VALUES (1,6);
INSERT INTO `PlayOn` VALUES (2,2);
INSERT INTO `PlayOn` VALUES (3,5);
INSERT INTO `PlayOn` VALUES (4,4);
INSERT INTO `PlayOn` VALUES (5,1);
INSERT INTO `PlayOn` VALUES (6,3);








