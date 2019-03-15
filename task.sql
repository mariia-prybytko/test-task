CREATE TABLE `task` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATE NOT NULL ,
  `header` VARCHAR(20) NOT NULL ,
  `body` VARCHAR(200) NOT NULL ,
  `status` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id`)
);