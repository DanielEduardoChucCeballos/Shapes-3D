-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Impresora
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Impresora
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Impresora` DEFAULT CHARACTER SET utf8 ;
USE `Impresora` ;

-- -----------------------------------------------------
-- Table `Impresora`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`users` (
  `id` INT NOT NULL,
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `Impresora`.`Models`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`Models` (
  `id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `url` VARCHAR(45) NULL,
  `description` VARCHAR(500) NULL,
  `color` VARCHAR(45) NULL,
  `quantity` INT NULL,
  `material` VARCHAR(45) NULL,
  `status` DOUBLE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Models_user_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_Models_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `Impresora`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`profile` (
  `id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `postal` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_profile_user1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_profile_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Impresora`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`orders` (
  `id` INT NOT NULL,
  `status` VARCHAR(45) NULL,
  `shipping_type` VARCHAR(45) NULL,
  `shipping_cost` DECIMAL NULL,
  `total` DECIMAL NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_orders_user1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_orders_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Impresora`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`items` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `quantity` INT NULL,
  `price` DECIMAL NULL,
  `image` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  `size` VARCHAR(45) NULL,
  `orders_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_items_orders1_idx` (`orders_id` ASC) VISIBLE,
  CONSTRAINT `fk_items_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `Impresora`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`departments` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`cities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`cities` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `departments_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cities_departments1_idx` (`departments_id` ASC) VISIBLE,
  CONSTRAINT `fk_cities_departments1`
    FOREIGN KEY (`departments_id`)
    REFERENCES `Impresora`.`departments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`districts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`districts` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `cities_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_districts_cities1_idx` (`cities_id` ASC) VISIBLE,
  CONSTRAINT `fk_districts_cities1`
    FOREIGN KEY (`cities_id`)
    REFERENCES `Impresora`.`cities` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`shipping`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`shipping` (
  `id` INT NOT NULL,
  `orders_id` INT NOT NULL,
  `departments_id` INT NOT NULL,
  `cities_id` INT NOT NULL,
  `districts_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_shipping_orders1_idx` (`orders_id` ASC) VISIBLE,
  INDEX `fk_shipping_departments1_idx` (`departments_id` ASC) VISIBLE,
  INDEX `fk_shipping_cities1_idx` (`cities_id` ASC) VISIBLE,
  INDEX `fk_shipping_districts1_idx` (`districts_id` ASC) VISIBLE,
  CONSTRAINT `fk_shipping_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `Impresora`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shipping_departments1`
    FOREIGN KEY (`departments_id`)
    REFERENCES `Impresora`.`departments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shipping_cities1`
    FOREIGN KEY (`cities_id`)
    REFERENCES `Impresora`.`cities` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shipping_districts1`
    FOREIGN KEY (`districts_id`)
    REFERENCES `Impresora`.`districts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`categories` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `slug` VARCHAR(45) NULL,
  `image` VARCHAR(45) NULL,
  `icon` VARCHAR(45) NULL,
  `sizes` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`products` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `slug` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `price` DOUBLE NULL,
  `quantity` INT NULL,
  `status` TINYINT NULL,
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_categories1_idx` (`categories_id` ASC) VISIBLE,
  CONSTRAINT `fk_products_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `Impresora`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`size`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`size` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `products_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_size_products1_idx` (`products_id` ASC) VISIBLE,
  CONSTRAINT `fk_size_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `Impresora`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`materials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`materials` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`material_size`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`material_size` (
  `id` INT NOT NULL,
  `quantity` INT NULL,
  `size_id` INT NOT NULL,
  `materials_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_material_size_size1_idx` (`size_id` ASC) VISIBLE,
  INDEX `fk_material_size_materials1_idx` (`materials_id` ASC) VISIBLE,
  CONSTRAINT `fk_material_size_size1`
    FOREIGN KEY (`size_id`)
    REFERENCES `Impresora`.`size` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_size_materials1`
    FOREIGN KEY (`materials_id`)
    REFERENCES `Impresora`.`materials` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`material_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`material_product` (
  `id` INT NOT NULL,
  `quantity` INT NULL,
  `materials_id` INT NOT NULL,
  `products_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_material_product_materials1_idx` (`materials_id` ASC) VISIBLE,
  INDEX `fk_material_product_products1_idx` (`products_id` ASC) VISIBLE,
  CONSTRAINT `fk_material_product_materials1`
    FOREIGN KEY (`materials_id`)
    REFERENCES `Impresora`.`materials` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_product_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `Impresora`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Impresora`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Impresora`.`image` (
  `id` INT NOT NULL,
  `image` VARCHAR(45) NULL,
  `products_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_image_products1_idx` (`products_id` ASC) VISIBLE,
  CONSTRAINT `fk_image_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `Impresora`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
