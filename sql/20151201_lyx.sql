
CREATE TABLE `User` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '�û����',
  `Name` varchar(50) NOT NULL COMMENT '�û��ǳ�',
  `LoginName` varchar(20) NOT NULL COMMENT '�û��˺�',
  `Password` varchar(50) NOT NULL COMMENT '�û�����',
  `Sex` varchar(10) NOT NULL COMMENT '�û��Ա�',
  `Level` int(11) NOT NULL DEFAULT '0' COMMENT '�û��ȼ�',
  `Phone` varchar(11) DEFAULT NULL COMMENT '�ֻ���',
  `Phone_Bind` int(4) NOT NULL DEFAULT '0' COMMENT '0δ��1�Ѱ�',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='�û���';

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '����Ա���',
  `Name` varchar(50) NOT NULL COMMENT '����Ա�˺�',
  `Password` varchar(50) NOT NULL COMMENT '����Ա����',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='����Ա��';