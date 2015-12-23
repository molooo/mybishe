ALTER TABLE `training`
ADD COLUMN `class_type`  int(5) NOT NULL COMMENT '授课形式(1.一对一,2.小班,3.大班,4.脱产)' AFTER `type_id`;



alter table training_message rename train_message;


ALTER TABLE `train_message`
MODIFY COLUMN `message_content`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '详情介绍' AFTER `class_type`,
ADD COLUMN `message_jianjie`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '培训简介' AFTER `class_type`;


ALTER TABLE `train_message`
ADD COLUMN `user_id`  int(5) NOT NULL COMMENT '发布人id' AFTER `training_id`,
ADD COLUMN `date`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '发布时间' AFTER `message_img`;
ADD COLUMN `type_id`  int(5) NOT NULL COMMENT '培训类型id' AFTER `user_id`;



