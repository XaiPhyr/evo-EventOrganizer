/* Feb 25, 2020 */
CREATE DATABASE IF NOT EXISTS `evo_app`;

CREATE TABLE IF NOT EXISTS evo_app.`event_header`(
    `Id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `eventName` VARCHAR(45) DEFAULT NULL,
    `startDate` DATETIME DEFAULT NULL,
    `endDate` DATETIME DEFAULT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL,
    `flag` INT(1) DEFAULT 0
) ENGINE = InnoDB AUTO_INCREMENT = 10001 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS evo_app.`event_detail`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `event_header` INT DEFAULT NULL,
    `eventHandler` VARCHAR(45) DEFAULT NULL,
    `eventDesc` VARCHAR(5000) DEFAULT NULL,
    `eventVenue` VARCHAR(25) DEFAULT NULL,
    `club` VARCHAR(45) DEFAULT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL,
    `flag` INT(1) DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci; 

/* Feb 26, 2020 */
ALTER TABLE
    evo_app.`event_detail` ADD COLUMN `eventShortDesc` VARCHAR(150) DEFAULT NULL AFTER eventHandler;
ALTER TABLE
    evo_app.`event_detail` ADD COLUMN `eventImage` VARCHAR(45) DEFAULT NULL AFTER event_header; 

/* Feb 27, 2020 */
CREATE TABLE IF NOT EXISTS evo_app.`announcements`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `announcementHeader` VARCHAR(250) DEFAULT NULL,
    `announcementBody` VARCHAR(5000) DEFAULT NULL,
    `announcementFooter` VARCHAR(250) DEFAULT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL,
    `flag` INT(1) DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

ALTER TABLE
    evo_app.`announcements` ADD COLUMN `status` VARCHAR(1) DEFAULT NULL; 
    
/* Mar 2, 2020 */
ALTER TABLE
    evo_app.`event_header` ADD COLUMN `registrationStartDate` DATETIME DEFAULT NULL AFTER endDate;
ALTER TABLE
    evo_app.`event_header` ADD COLUMN `registrationEndDate` DATETIME DEFAULT NULL AFTER registrationStartDate;
    
CREATE TABLE IF NOT EXISTS evo_app.`attendance`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `event_header` INT DEFAULT NULL,
    `refnum` VARCHAR(15) DEFAULT NULL,
    `firstname` VARCHAR(45) DEFAULT NULL,
    `lastname` VARCHAR(45) DEFAULT NULL,
    `email` VARCHAR(45) DEFAULT NULL,
    `institution` VARCHAR(45) DEFAULT NULL,
    `profession` VARCHAR(45) DEFAULT NULL,
    `registrationDate` DATETIME DEFAULT NULL
) ENGINE = InnoDB AUTO_INCREMENT = 90001 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

/* Mar 3, 2020 */
ALTER TABLE evo_app.`event_header` ADD COLUMN `eventCode` varchar(15) DEFAULT NULL AFTER Id;
ALTER TABLE evo_app.`event_header` ADD COLUMN `maxAttendance` int DEFAULT NULL AFTER eventName;

/* Mar 6, 2020 */
CREATE TABLE IF NOT EXISTS evo_app.`clubs`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `clubname` VARCHAR(45) DEFAULT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL,
    `flag` INT(1) DEFAULT 0
) ENGINE = InnoDB AUTO_INCREMENT = 11001 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS evo_app.`venues`(
    `Id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `venuename` VARCHAR(45) DEFAULT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL,
    `flag` INT(1) DEFAULT 0
) ENGINE = InnoDB AUTO_INCREMENT = 12001 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

/* Mar 13, 2020 */
CREATE TABLE IF NOT EXISTS evo_app.`accounts`(
    `Id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(45) DEFAULT NULL,
    `password` VARCHAR(45) DEFAULT NULL,
    `image` VARCHAR(45) DEFAULT NULL,
    `email` VARCHAR(45) DEFAULT NULL,
    `status` VARCHAR(15) DEFAULT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL,
    `flag` INT(1) DEFAULT 0
) ENGINE = InnoDB AUTO_INCREMENT = 90001 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;