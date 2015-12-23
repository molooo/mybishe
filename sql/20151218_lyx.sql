







          --by lyx
		      CREATE TABLE `note_reply` (
                  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回复编号',
                   `Note_Id` int(11) NOT NULL COMMENT '帖子编号',
                   `UserId` int(11) NOT NULL COMMENT '回帖人编号',
                   `UserName` int(11) NOT NULL COMMENT '回帖人昵称',
                    `Time` int(11) NOT NULL COMMENT '回帖日期',
                   `Content` text COMMENT '帖子内容',
                   `Photo` varchar(255) DEFAULT NULL COMMENT '照片',
                    PRIMARY KEY (`Id`),
                    KEY `UserId` (`UserId`),
                    KEY `note_reply_ibfk_1` (`Note_Id`),
                    CONSTRAINT `note_reply_ibfk_1` FOREIGN KEY (`Note_Id`) REFERENCES `petnote` (`Id`) ON DELETE CASCADE,
                    CONSTRAINT `note_reply_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`) ON DELETE CASCADE
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='回复帖子表';