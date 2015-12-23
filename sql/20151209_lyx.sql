         
		 
		 
		 
		 
		 
		 
		 
		 
		 ALTER TABLE `user` 
		 MODIFY COLUMN `Name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '用户昵称',
		 MODIFY COLUMN `Sex`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 0 COMMENT '用户性别';