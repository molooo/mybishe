INSERT INTO `notecate` VALUES (1, '��ͨ');
INSERT INTO `notecate` VALUES (2, '����');
INSERT INTO `notecate` VALUES (3, '����');




ALTER TABLE `category` ADD COLUMN `Pid`  int(11) NOT NULL DEFAULT 0 COMMENT '��������ID';


INSERT INTO `category` VALUES (1, 'è', 0);
INSERT INTO `category` VALUES (2, '��', 0);
INSERT INTO `category` VALUES (3, 'С��', 0);
INSERT INTO `category` VALUES (4, '����', 0);
INSERT INTO `category` VALUES (5, '��è', 1);
INSERT INTO `category` VALUES (6, '����è', 1);
INSERT INTO `category` VALUES (7, '��˹è', 1);
INSERT INTO `category` VALUES (8, '̩��', 2);
INSERT INTO `category` VALUES (9, '��ĦҮ', 2);
INSERT INTO `category` VALUES (10, '��ʿ��', 2);
INSERT INTO `category` VALUES (11, '��è', 3);
INSERT INTO `category` VALUES (12, '����', 3);
INSERT INTO `category` VALUES (13, '����', 3);
INSERT INTO `category` VALUES (14, '����', 3);
INSERT INTO `category` VALUES (15, '����', 4);
INSERT INTO `category` VALUES (16, '����', 4);



