CREATE TABLE `HouseMessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '���ݱ��',
  `leixing` int(11) NOT NULL COMMENT '��������1�ⷿ 2���ַ� 3�·�',
  `housename` int(11) NOT NULL COMMENT '��������',
  `houseprice` int(11) NOT NULL COMMENT '���ݼ۸�',
  `houseaddress` int(11) NOT NULL COMMENT '���ݵ�ַ',
  `shi` varchar(255) NOT NULL COMMENT '����',
  `ting` int(3) NOT NULL COMMENT '����',
  `wei` int(3) NOT NULL COMMENT '����',
  `chicun` int(3) NOT NULL COMMENT '���ݳߴ�',
  `image1` int(3) NOT NULL COMMENT '����ͼƬ1',
  `lianxirenname` int(3) NOT NULL COMMENT '��ϵ������',
  `lianxirenid` int(3) NOT NULL COMMENT '��ϵ��id',
  `phone` int(3) NOT NULL COMMENT '��ϵ�˵绰',
  UNIQUE KEY `unique_HouseMessage_id` (`id`)
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='������Ϣ��';