ALTER TABLE `training`
ADD COLUMN `class_type`  int(5) NOT NULL COMMENT '�ڿ���ʽ(1.һ��һ,2.С��,3.���,4.�Ѳ�)' AFTER `type_id`;



alter table training_message rename train_message;


ALTER TABLE `train_message`
MODIFY COLUMN `message_content`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '�������' AFTER `class_type`,
ADD COLUMN `message_jianjie`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '��ѵ���' AFTER `class_type`;


ALTER TABLE `train_message`
ADD COLUMN `user_id`  int(5) NOT NULL COMMENT '������id' AFTER `training_id`,
ADD COLUMN `date`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '����ʱ��' AFTER `message_img`;
ADD COLUMN `type_id`  int(5) NOT NULL COMMENT '��ѵ����id' AFTER `user_id`;



