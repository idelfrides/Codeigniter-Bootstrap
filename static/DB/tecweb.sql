-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema tecweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tecweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tecweb` DEFAULT CHARACTER SET latin1 ;
USE `tecweb` ;

-- -----------------------------------------------------
-- Table `tecweb`.`contatounico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tecweb`.`contatounico` (
  `idcontatoUnico` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `destinatario` VARCHAR(45) NOT NULL,
  `mensagem` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idcontatoUnico`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `tecweb`.`membro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tecweb`.`membro` (
  `idmembro` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `idade` INT NOT NULL,
  `curso` VARCHAR(45) NOT NULL,
  `vertente` VARCHAR(45) NOT NULL,
  `naturalidade` VARCHAR(45) NOT NULL,
  `hobbies` VARCHAR(255) NOT NULL,
  `objetivoVida` TEXT NOT NULL,
  `contatounico_idcontatoUnico` INT NOT NULL,
  PRIMARY KEY (`idmembro`),
  INDEX `fk_membro_contatounico_idx` (`contatounico_idcontatoUnico` ASC),
  CONSTRAINT `fk_membro_contatounico`
    FOREIGN KEY (`contatounico_idcontatoUnico`)
    REFERENCES `tecweb`.`contatounico` (`idcontatoUnico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

CREATE USER 'tecuser'@'localhost' IDENTIFIED BY 'tecweb123';
grant all privileges on tecweb.* to 'tecuser'@'localhost';
