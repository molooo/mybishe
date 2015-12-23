



     --by lyx
	    ALTER TABLE `petnote` MODIFY COLUMN `BrowseTime`  int(11) NULL DEFAULT 0 COMMENT '浏览数';
		ALTER TABLE `petnote` DROP FOREIGN KEY `petnote_ibfk_1`;

        ALTER TABLE `petnote` DROP FOREIGN KEY `petnote_ibfk_2`;

        ALTER TABLE `petnote` ADD CONSTRAINT `petnote_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `notecate` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

        ALTER TABLE `petnote` ADD CONSTRAINT `petnote_ibfk_2` FOREIGN KEY (`PetCategory`) REFERENCES `category` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;
		ALTER TABLE `petnote` MODIFY COLUMN `IfSolve`  int(3) NOT NULL DEFAULT 0 COMMENT '问题是否解决 0未解决 1解决';