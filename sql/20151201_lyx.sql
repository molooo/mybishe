
CREATE TABLE `User` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `Name` varchar(50) NOT NULL COMMENT '用户昵称',
  `LoginName` varchar(20) NOT NULL COMMENT '用户账号',
  `Password` varchar(50) NOT NULL COMMENT '用户密码',
  `Sex` varchar(10) NOT NULL COMMENT '用户性别',
  `Level` int(11) NOT NULL DEFAULT '0' COMMENT '用户等级',
  `Phone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `Phone_Bind` int(4) NOT NULL DEFAULT '0' COMMENT '0未绑定1已绑定',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `Name` varchar(50) NOT NULL COMMENT '管理员账号',
  `Password` varchar(50) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员表';