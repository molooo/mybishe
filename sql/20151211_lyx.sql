







       ALTER TABLE `petnote` MODIFY COLUMN `Content`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '帖子内容',
                             ADD COLUMN `Title`  varchar(255) NOT NULL COMMENT '标题',
                             ADD COLUMN `IfShow`  int(3) NOT NULL DEFAULT 0 COMMENT '是否滚动展示 0否 1是',
							 ADD COLUMN `Photo`  varchar(255) NULL COMMENT '照片';
	   ALTER TABLE `petnote` DROP COLUMN `ReplyTime`;
	   CREATE TABLE `PetTips` (
         `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
         `Time` int(11) NOT NULL COMMENT '发表日期',
         `Title` varchar(255) NOT NULL COMMENT '标题',
         `Content` varchar(255) DEFAULT NULL COMMENT '内容',
         `Category_id` int(3) NOT NULL COMMENT '宠物种类',
         `Photo` varchar(255) DEFAULT NULL COMMENT '照片',
          PRIMARY KEY (`Id`),
          KEY `Category_id` (`Category_id`),
          CONSTRAINT `PetTips_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Id`) ON DELETE CASCADE
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物小知识表';