


CREATE TABLE `NoteCate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '种类编号',
  `Name` varchar(50) NOT NULL COMMENT '种类名称',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='帖子种类表';

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '种类编号',
  `Name` varchar(50) NOT NULL COMMENT '种类名称',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物种类表';

CREATE TABLE `PetEncy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '宠物编号',
  `Name` varchar(50) NOT NULL COMMENT '宠物名称',
  `Category` int(3) NOT NULL COMMENT '宠物种类',
  `Introduce` varchar(255) NOT NULL COMMENT '宠物介绍',
  PRIMARY KEY (`Id`),
  FOREIGN KEY (`Category`) REFERENCES Category(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物百科表';

CREATE TABLE `PetNote` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '帖子编号',
  `UserId` int(11) NOT NULL COMMENT '发帖人编号',
  `Time` int(11) NOT NULL COMMENT '发帖日期',
  `ReplyTime` int(11) NOT NULL COMMENT '回复数',
  `BrowseTime` int(11) NOT NULL COMMENT '浏览数',
  `Content` varchar(255) NOT NULL COMMENT '帖子内容',
  `Category` int(3) NOT NULL COMMENT '帖子种类',
  `PetCategory` int(3) NOT NULL COMMENT '帖子宠物种类',
  `IfSolve` int(3) NOT NULL COMMENT '问题是否结局 0未解决 1解决',
  PRIMARY KEY (`Id`),
  FOREIGN KEY (`Category`) REFERENCES Category(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`PetCategory`) REFERENCES NoteCate(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`UserId`) REFERENCES User(`id`) ON DELETE CASCADE
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物帖表';

CREATE TABLE `Doctor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '医生编号',
  `Name` varchar(20) NOT NULL COMMENT '医生姓名',
  `Level` int(11) NOT NULL COMMENT '医生等级',
  `IfPass` int(3) NOT NULL COMMENT '是否认证 0未认证 1认证',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='宠物医生表';