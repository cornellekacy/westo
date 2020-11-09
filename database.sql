SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `receipt` ;
CREATE SCHEMA IF NOT EXISTS `receipt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `receipt` ;

-- -----------------------------------------------------
-- Table `library`.`item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `receipt`.`users` ;

CREATE TABLE IF NOT EXISTS `receipt`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `email`, `username`,`password`) VALUES
(1, 'cornelle@gmail.com', 'admin', md5('admin123'));


DROP TABLE IF EXISTS `receipt`.`receipt` ;

CREATE TABLE IF NOT EXISTS `receipt`.`receipt` (
  `receipt_id` INT NOT NULL AUTO_INCREMENT,
  `rname` varchar(20) NOT NULL,
  `rcountry` varchar(20) NOT NULL,
  `rcity` varchar(20) NOT NULL,
  `raddress` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `saddress` varchar(20) NOT NULL,
  `scountry` varchar(20) NOT NULL,
  `scity` varchar(20) NOT NULL,
  `sphone` varchar(20) NOT NULL,
  `mtnc` varchar(20) NOT NULL,
  `trndate` varchar(20) NOT NULL,
  `areceive` varchar(20) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `asend` varchar(20) NOT NULL,

  PRIMARY KEY (`receipt_id`))
ENGINE = InnoDB;
