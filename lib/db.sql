
-- -----------------------------------------------------
-- Table `builder`.`product`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `builder`.`product` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `productName` VARCHAR(255) NULL DEFAULT NULL ,
  `s7location` VARCHAR(255) NULL DEFAULT NULL ,
  `state` VARCHAR(45) NULL DEFAULT 'draft' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `builder`.`pages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `builder`.`pages` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `pageName` VARCHAR(255) NOT NULL ,
  `isBlank` TINYINT(1) NULL DEFAULT NULL ,
  `pageOrder` INT(11) NULL DEFAULT NULL ,
  `s7page` INT(11) NULL DEFAULT NULL ,
  `product_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `product_id` (`product_id` ASC) ,
  CONSTRAINT `product_id`
    FOREIGN KEY (`product_id` )
    REFERENCES `builder`.`product` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `builder`.`field`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `builder`.`field` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `fieldName` VARCHAR(255) NOT NULL ,
  `fieldType` VARCHAR(255) NOT NULL ,
  `fieldDefaultValue` VARCHAR(255) NULL DEFAULT NULL ,
  `fieldOrder` INT(11) NULL ,
  `pages_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `pages_id` (`pages_id` ASC) ,
  CONSTRAINT `pages_id`
    FOREIGN KEY (`pages_id` )
    REFERENCES `builder`.`pages` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;