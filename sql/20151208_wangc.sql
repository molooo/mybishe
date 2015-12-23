CREATE TABLE `HouseMessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '房屋编号',
  `leixing` int(11) NOT NULL COMMENT '房屋类型1租房 2二手房 3新房',
  `housename` int(11) NOT NULL COMMENT '房屋名称',
  `houseprice` int(11) NOT NULL COMMENT '房屋价格',
  `houseaddress` int(11) NOT NULL COMMENT '房屋地址',
  `shi` varchar(255) NOT NULL COMMENT '几室',
  `ting` int(3) NOT NULL COMMENT '几厅',
  `wei` int(3) NOT NULL COMMENT '几卫',
  `chicun` int(3) NOT NULL COMMENT '房屋尺寸',
  `image1` int(3) NOT NULL COMMENT '房屋图片1',
  `lianxirenname` int(3) NOT NULL COMMENT '联系人名称',
  `lianxirenid` int(3) NOT NULL COMMENT '联系人id',
  `phone` int(3) NOT NULL COMMENT '联系人电话',
  UNIQUE KEY `unique_HouseMessage_id` (`id`)
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='房屋信息表';