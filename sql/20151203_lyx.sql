


CREATE TABLE `NoteCate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '������',
  `Name` varchar(50) NOT NULL COMMENT '��������',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='���������';

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '������',
  `Name` varchar(50) NOT NULL COMMENT '��������',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='���������';

CREATE TABLE `PetEncy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '������',
  `Name` varchar(50) NOT NULL COMMENT '��������',
  `Category` int(3) NOT NULL COMMENT '��������',
  `Introduce` varchar(255) NOT NULL COMMENT '�������',
  PRIMARY KEY (`Id`),
  FOREIGN KEY (`Category`) REFERENCES Category(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='����ٿƱ�';

CREATE TABLE `PetNote` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '���ӱ��',
  `UserId` int(11) NOT NULL COMMENT '�����˱��',
  `Time` int(11) NOT NULL COMMENT '��������',
  `ReplyTime` int(11) NOT NULL COMMENT '�ظ���',
  `BrowseTime` int(11) NOT NULL COMMENT '�����',
  `Content` varchar(255) NOT NULL COMMENT '��������',
  `Category` int(3) NOT NULL COMMENT '��������',
  `PetCategory` int(3) NOT NULL COMMENT '���ӳ�������',
  `IfSolve` int(3) NOT NULL COMMENT '�����Ƿ��� 0δ��� 1���',
  PRIMARY KEY (`Id`),
  FOREIGN KEY (`Category`) REFERENCES Category(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`PetCategory`) REFERENCES NoteCate(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`UserId`) REFERENCES User(`id`) ON DELETE CASCADE
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='��������';

CREATE TABLE `Doctor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ҽ�����',
  `Name` varchar(20) NOT NULL COMMENT 'ҽ������',
  `Level` int(11) NOT NULL COMMENT 'ҽ���ȼ�',
  `IfPass` int(3) NOT NULL COMMENT '�Ƿ���֤ 0δ��֤ 1��֤',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='����ҽ����';