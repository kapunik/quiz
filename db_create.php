
<?php

$host = 'localhost';
$user = 'quiz';
$pass = 'quiz';
$dbname = 'quiz';

$mysqli = new mysqli($host, $user, $pass, $dbname);

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

$sql_crate_Games = "CREATE TABLE `Games` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `number` INT NOT NULL ,
  `date` DATE NOT NULL ,
  `teams` TEXT NOT NULL ,
  `rounds` TEXT NOT NULL ,
  `score` TEXT NOT NULL ,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;";

$sql_crate_Rounds = "CREATE TABLE `Rounds` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `number` INT NOT NULL ,
  `name` TEXT NOT NULL ,
  `description` TEXT NOT NULL ,
  `rewards` INT NOT NULL ,
  `game` INT NOT NULL ,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;";

$sql_crate_Questions = "CREATE TABLE `Questions` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `number` INT NOT NULL ,
    `round` INT NOT NULL ,
    `description` TEXT NOT NULL ,
    `timer` INT NOT NULL ,
    `type` TEXT NOT NULL ,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;";

$sql_crate_Answers = "CREATE TABLE `Answers` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `number` INT NOT NULL ,
    `question` INT NOT NULL ,
    `description` TEXT NOT NULL ,
    `truth` BOOLEAN NOT NULL ,
    `confirmation` TEXT NOT NULL ,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;";

$sql_crate_Teams = "CREATE TABLE `Teams` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` TEXT NOT NULL ,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;";

$sql_insert_Geme = 'INSERT INTO `games`(`number`, `date`, `teams`, `rounds`, `score`) VALUES (2, "2019-01-3", "1,2,3,4", "1,2,3", "0,0,0,0");';


if($mysqli->query($sql_insert_Geme) === TRUE){
  printf("успешно");
} else {
  printf("Не удалось выполнить запрос: %s\n", $mysqli->connect_error);
};
