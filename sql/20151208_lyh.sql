
ALTER TABLE  `User` ADD  `email` varchar(20) NOT NULL COMMENT '电子邮箱';
ALTER TABLE  `User` ADD  `blog`  varchar(50)  COMMENT '个人主页';
ALTER TABLE  `User` ADD  `photo` varchar(50)  COMMENT '个人头像';
ALTER TABLE  `User` ADD  `qq`	 varchar(20)  COMMENT 'QQ';
ALTER TABLE  `User` ADD  `ps` 	 varchar(50)  COMMENT '备注';