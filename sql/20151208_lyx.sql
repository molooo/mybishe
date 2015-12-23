INSERT INTO `notecate` VALUES (1, '普通');
INSERT INTO `notecate` VALUES (2, '交易');
INSERT INTO `notecate` VALUES (3, '病情');




ALTER TABLE `category` ADD COLUMN `Pid`  int(11) NOT NULL DEFAULT 0 COMMENT '二级分类ID';


INSERT INTO `category` VALUES (1, '猫', 0);
INSERT INTO `category` VALUES (2, '狗', 0);
INSERT INTO `category` VALUES (3, '小宠', 0);
INSERT INTO `category` VALUES (4, '海洋', 0);
INSERT INTO `category` VALUES (5, '土猫', 1);
INSERT INTO `category` VALUES (6, '暹罗猫', 1);
INSERT INTO `category` VALUES (7, '波斯猫', 1);
INSERT INTO `category` VALUES (8, '泰迪', 2);
INSERT INTO `category` VALUES (9, '萨摩耶', 2);
INSERT INTO `category` VALUES (10, '哈士奇', 2);
INSERT INTO `category` VALUES (11, '龙猫', 3);
INSERT INTO `category` VALUES (12, '仓鼠', 3);
INSERT INTO `category` VALUES (13, '兔子', 3);
INSERT INTO `category` VALUES (14, '鸟类', 3);
INSERT INTO `category` VALUES (15, '金鱼', 4);
INSERT INTO `category` VALUES (16, '锦鲤', 4);



