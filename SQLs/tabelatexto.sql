-- MySQL Script generated by MySQL Workbench
-- Sat Oct 13 22:07:19 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema config
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema config
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `config` DEFAULT CHARACTER SET utf8 ;
USE `config` ;

-- -----------------------------------------------------
-- Table `config`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `config`.`pessoa` (
  `codpessoa` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`codpessoa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `config`.`projeto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `config`.`projeto` (
  `codprojeto` INT NOT NULL,
  `nomeprojeto` VARCHAR(50) NULL,
  `idprojeto` INT NULL,
  `codpessoa` INT NULL,
  PRIMARY KEY (`codprojeto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `config`.`capa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `config`.`capa` (
  `idcapa` INT NOT NULL,
  `nomecapa` VARCHAR(45) NULL,
  `imagcapa` INT NULL,
  `nomeprojeto` VARCHAR(45) NULL,
  `nomefaculdade` VARCHAR(45) NULL,
  `codimag` INT NULL,
  `nomepessoa` VARCHAR(45) NULL,
  `codprojeto` INT NULL,
  PRIMARY KEY (`idcapa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `config`.`resumo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `config`.`resumo` (
  `codresumo` INT NOT NULL,
  `textoresumo` VARCHAR(300) NULL,
  `abstract` VARCHAR(300) NULL,
  `codprojeto` INT NULL,
  PRIMARY KEY (`codresumo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `config`.`capitulo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `config`.`capitulo` (
  `codcapitulo` INT NOT NULL,
  `codrefimagem` INT NULL,
  `textocapitulo` VARCHAR(100) NULL,
  `textodecorra` VARCHAR(1000) NULL,
  `codprojeto` INT NULL,
  `subcod` INT NULL,
  PRIMARY KEY (`codcapitulo`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
