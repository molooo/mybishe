         
		 
		 
		 
		 
		 
		 
		 
		 
		 ALTER TABLE `user` 
		 MODIFY COLUMN `Name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '�û��ǳ�',
		 MODIFY COLUMN `Sex`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 0 COMMENT '�û��Ա�';