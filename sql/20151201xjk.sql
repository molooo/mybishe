

CREATE TABLE `training` (
`training_id`  int(5) NOT NULL AUTO_INCREMENT COMMENT '��ѵ����id' ,
`training_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '��������' ,
`type_id`  int(5) NOT NULL COMMENT '��ѵ��������' ,
`training_person`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '������ϵ��' ,
`training_addr`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '������ַ' ,
`training_tel`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '�����绰' ,
`training_details`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '��������' ,
PRIMARY KEY (`training_id`)
) CHARACTER SET utf8
;


CREATE TABLE `training_type` (
`type_id`  int(5) NOT NULL AUTO_INCREMENT COMMENT '��������' ,
`type_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '��������' ,
PRIMARY KEY (`type_id`)
)CHARACTER SET utf8
;


CREATE TABLE `training_message` (
`message_id`  int(5) NOT NULL AUTO_INCREMENT COMMENT '��Ϣid' ,
`training_id`  int(5) NOT NULL COMMENT '��ѵ����id' ,
`message_title`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '��Ϣ����' ,
`class_type`  int(5) NOT NULL COMMENT '�༶����(1.�Ѳ��࣬2.��ĩ�࣬3.���ٰ࣬4.�����)' ,
`message_content`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`message_img`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '��ϢͼƬ' ,
PRIMARY KEY (`message_id`)
)CHARACTER SET utf8
;
