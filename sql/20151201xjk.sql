

CREATE TABLE `training` (
`training_id`  int(5) NOT NULL AUTO_INCREMENT COMMENT '培训机构id' ,
`training_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '机构名称' ,
`type_id`  int(5) NOT NULL COMMENT '培训机构类型' ,
`training_person`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '机构联系人' ,
`training_addr`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '机构地址' ,
`training_tel`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '机构电话' ,
`training_details`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '机构详情' ,
PRIMARY KEY (`training_id`)
) CHARACTER SET utf8
;


CREATE TABLE `training_type` (
`type_id`  int(5) NOT NULL AUTO_INCREMENT COMMENT '机构类型' ,
`type_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '类型名称' ,
PRIMARY KEY (`type_id`)
)CHARACTER SET utf8
;


CREATE TABLE `training_message` (
`message_id`  int(5) NOT NULL AUTO_INCREMENT COMMENT '信息id' ,
`training_id`  int(5) NOT NULL COMMENT '培训机构id' ,
`message_title`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '信息标题' ,
`class_type`  int(5) NOT NULL COMMENT '班级类型(1.脱产班，2.周末班，3.寒假班，4.网络班)' ,
`message_content`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`message_img`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '信息图片' ,
PRIMARY KEY (`message_id`)
)CHARACTER SET utf8
;
