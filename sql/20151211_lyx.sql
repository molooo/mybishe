







       ALTER TABLE `petnote` MODIFY COLUMN `Content`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '��������',
                             ADD COLUMN `Title`  varchar(255) NOT NULL COMMENT '����',
                             ADD COLUMN `IfShow`  int(3) NOT NULL DEFAULT 0 COMMENT '�Ƿ����չʾ 0�� 1��',
							 ADD COLUMN `Photo`  varchar(255) NULL COMMENT '��Ƭ';
	   ALTER TABLE `petnote` DROP COLUMN `ReplyTime`;
	   CREATE TABLE `PetTips` (
         `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '���',
         `Time` int(11) NOT NULL COMMENT '��������',
         `Title` varchar(255) NOT NULL COMMENT '����',
         `Content` varchar(255) DEFAULT NULL COMMENT '����',
         `Category_id` int(3) NOT NULL COMMENT '��������',
         `Photo` varchar(255) DEFAULT NULL COMMENT '��Ƭ',
          PRIMARY KEY (`Id`),
          KEY `Category_id` (`Category_id`),
          CONSTRAINT `PetTips_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Id`) ON DELETE CASCADE
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='����С֪ʶ��';