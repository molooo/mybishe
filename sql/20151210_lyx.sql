

             UPDATE `category` SET `Name`='大型犬' WHERE (`Id`='2');
			 UPDATE `category` SET `Name`='中型犬' WHERE (`Id`='3');
			 UPDATE `category` SET `Name`='小型犬' WHERE (`Id`='4');
			 INSERT INTO `category` (`Id`,`Name`) VALUES ('5',`水族`);
			 INSERT INTO `category` (`Id`,`Name`) VALUES ('6',`爬行`);
			 DELETE FROM `category` WHERE Id >= 5;
			 
			 CREATE TABLE `Feature` (
                `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '特性编号',
                `Name` varchar(50) NOT NULL COMMENT '特性',
                PRIMARY KEY (`Id`)
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物特性表';
			 CREATE TABLE `HairColor` (
                `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '毛色编号',
                `Name` varchar(50) NOT NULL COMMENT '颜色',
                PRIMARY KEY (`Id`)
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物毛色表';
			 ALTER TABLE `petency`
                   ADD COLUMN `HairId`  int(3) NOT NULL COMMENT '宠物毛色' AFTER `Introduce`,
                   ADD COLUMN `Feature`  int(3) NOT NULL COMMENT '宠物特性编号' AFTER `HairId`;

            ALTER TABLE `petency` ADD CONSTRAINT `petency_ibfk_2` FOREIGN KEY (`HairId`) REFERENCES `haircolor` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

            ALTER TABLE `petency` ADD CONSTRAINT `petency_ibfk_3` FOREIGN KEY (`Feature`) REFERENCES `haircolor` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;
			
			
			INSERT INTO `haircolor` (`Name`) VALUES ('纯色');
			INSERT INTO `haircolor` (`Name`) VALUES ('棕色');
			INSERT INTO `haircolor` (`Name`) VALUES ('黑与棕');
			INSERT INTO `haircolor` (`Name`) VALUES ('黑与白');
			
			INSERT INTO `feature` (`Name`) VALUES ('长毛');
			INSERT INTO `feature` (`Name`) VALUES ('短毛');
			INSERT INTO `feature` (`Name`) VALUES ('非常友善');
			INSERT INTO `feature` (`Name`) VALUES ('无体味');
			INSERT INTO `feature` (`Name`) VALUES ('导盲');
			
			ALTER TABLE `petency` ADD COLUMN `photo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '宠物图片' AFTER `Feature`;

			
			ALTER TABLE `petency`
               ADD COLUMN `ForeignName`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '英文名',
               ADD COLUMN `ChanDi`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '产地',
               ADD COLUMN `ShouMing`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '寿命',
               ADD COLUMN `OtherName`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '别名';
			   
			   
			   
			   
			INSERT INTO `petency` (`Name`, `Category`, `Introduce`, `HairId`, `Feature`, `ForeignName`, `ChanDi`, `ShouMing`, `OtherName`) VALUES ('阿富汗猎犬', '1', '阿富汗猎犬又名喀布尔犬，属古老犬种。4000年前阿富汗的绘画中即有该犬的画像，此犬原产中东地区,后来沿着通商路线传到阿富汗，被用来狩猎瞪羚、狼、雪豹等动物。<br/>', '4', '3', 'Afghan Hound', '阿富汗', '12-15年', '\r\n    俾路支猎犬,喀布尔犬');
