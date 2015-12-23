



        --by lyx
		     ALTER TABLE `petnote` ADD COLUMN `IfComp`  int(3) NOT NULL DEFAULT 0 COMMENT '是否精品贴 0不是 1是';
			 ALTER TABLE `petnote` MODIFY COLUMN `Content`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '帖子内容';
