
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- shopinfo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `shopinfo`;


CREATE TABLE `shopinfo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`f_name` VARCHAR(50) default 'null' NOT NULL,
	`f_password` VARCHAR(40) default 'null' NOT NULL,
	`f_number` VARCHAR(20) default 'null' NOT NULL,
	`f_mobile` VARCHAR(20) default 'null' NOT NULL,
	`f_address` VARCHAR(100) default 'null' NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `f_name` (`f_name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- menuinfo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `menuinfo`;


CREATE TABLE `menuinfo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`menuname` VARCHAR(50) default 'null' NOT NULL,
	`menu_link` VARCHAR(100) default '1' NOT NULL,
	`parent_id` INTEGER default 0 NOT NULL,
	`shopinfo_id` INTEGER default 0 NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `menuinfo_FI_1` (`shopinfo_id`),
	CONSTRAINT `menuinfo_FK_1`
		FOREIGN KEY (`shopinfo_id`)
		REFERENCES `shopinfo` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- shoppage
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `shoppage`;


CREATE TABLE `shoppage`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`page_title` VARCHAR(50)  NOT NULL,
	`page_number` VARCHAR(20) default 'null' NOT NULL,
	`page_content` TEXT  NOT NULL,
	`shopinfo_id` INTEGER default 0 NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`is_mainpage` TINYINT default 0 NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `page_title` (`page_title`),
	INDEX `shoppage_FI_1` (`shopinfo_id`),
	CONSTRAINT `shoppage_FK_1`
		FOREIGN KEY (`shopinfo_id`)
		REFERENCES `shopinfo` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
