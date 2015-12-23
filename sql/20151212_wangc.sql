CREATE TABLE IF NOT EXISTS `houseliaotian` (
  `id` int(4) NOT NULL AUTO_INCREMENT,	
  `content` text NOT NULL,
  `sendname` varchar(50) NOT NULL,
  `receiveid` varchar(50) NOT NULL,
  `receivename` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `unique_houseliaotian_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;



ALTER TABLE  `housemessage` CHANGE  `lianxirenid`  `lianxirenid` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT  '联系人id';



ALTER TABLE  `housemessage` ADD  `amountprice` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT  '房屋总价格' AFTER  `houseprice`;



ALTER TABLE  `housemessage` CHANGE  `houseprice`  `houseprice` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT  '房屋价格';
