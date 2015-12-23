ALTER TABLE `petnote` DROP FOREIGN KEY `petnote_ibfk_1`;

ALTER TABLE `petnote` DROP FOREIGN KEY `petnote_ibfk_2`;

ALTER TABLE `petnote` ADD CONSTRAINT `petnote_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `notecate` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `petnote` ADD CONSTRAINT `petnote_ibfk_2` FOREIGN KEY (`PetCategory`) REFERENCES `category` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;