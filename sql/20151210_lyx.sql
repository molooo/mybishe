

             UPDATE `category` SET `Name`='����Ȯ' WHERE (`Id`='2');
			 UPDATE `category` SET `Name`='����Ȯ' WHERE (`Id`='3');
			 UPDATE `category` SET `Name`='С��Ȯ' WHERE (`Id`='4');
			 INSERT INTO `category` (`Id`,`Name`) VALUES ('5',`ˮ��`);
			 INSERT INTO `category` (`Id`,`Name`) VALUES ('6',`����`);
			 DELETE FROM `category` WHERE Id >= 5;
			 
			 CREATE TABLE `Feature` (
                `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '���Ա��',
                `Name` varchar(50) NOT NULL COMMENT '����',
                PRIMARY KEY (`Id`)
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='�������Ա�';
			 CREATE TABLE `HairColor` (
                `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ëɫ���',
                `Name` varchar(50) NOT NULL COMMENT '��ɫ',
                PRIMARY KEY (`Id`)
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='����ëɫ��';
			 ALTER TABLE `petency`
                   ADD COLUMN `HairId`  int(3) NOT NULL COMMENT '����ëɫ' AFTER `Introduce`,
                   ADD COLUMN `Feature`  int(3) NOT NULL COMMENT '�������Ա��' AFTER `HairId`;

            ALTER TABLE `petency` ADD CONSTRAINT `petency_ibfk_2` FOREIGN KEY (`HairId`) REFERENCES `haircolor` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

            ALTER TABLE `petency` ADD CONSTRAINT `petency_ibfk_3` FOREIGN KEY (`Feature`) REFERENCES `haircolor` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;
			
			
			INSERT INTO `haircolor` (`Name`) VALUES ('��ɫ');
			INSERT INTO `haircolor` (`Name`) VALUES ('��ɫ');
			INSERT INTO `haircolor` (`Name`) VALUES ('������');
			INSERT INTO `haircolor` (`Name`) VALUES ('�����');
			
			INSERT INTO `feature` (`Name`) VALUES ('��ë');
			INSERT INTO `feature` (`Name`) VALUES ('��ë');
			INSERT INTO `feature` (`Name`) VALUES ('�ǳ�����');
			INSERT INTO `feature` (`Name`) VALUES ('����ζ');
			INSERT INTO `feature` (`Name`) VALUES ('��ä');
			
			ALTER TABLE `petency` ADD COLUMN `photo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '����ͼƬ' AFTER `Feature`;

			
			ALTER TABLE `petency`
               ADD COLUMN `ForeignName`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Ӣ����',
               ADD COLUMN `ChanDi`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '����',
               ADD COLUMN `ShouMing`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '����',
               ADD COLUMN `OtherName`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '����';
			   
			   
			   
			   
			INSERT INTO `petency` (`Name`, `Category`, `Introduce`, `HairId`, `Feature`, `ForeignName`, `ChanDi`, `ShouMing`, `OtherName`) VALUES ('��������Ȯ', '1', '��������Ȯ����������Ȯ��������Ȯ�֡�4000��ǰ�������Ļ滭�м��и�Ȯ�Ļ��񣬴�Ȯԭ���ж�����,��������ͨ��·�ߴ��������������������Ե��硢�ǡ�ѩ���ȶ��<br/>', '4', '3', 'Afghan Hound', '������', '12-15��', '\r\n    ��·֧��Ȯ,������Ȯ');
