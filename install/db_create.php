
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



$sql_1 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (3, 1, 'У какой птицы глаз по размерам больше чем мозг?', 60, 'four_answers');";
$sql_2 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (4, 1, 'Что из перечисленного Кот Матроскин не предъявлял в качестве своих документов?', 60, 'four_answers');";
$sql_3 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (5, 1, 'Куда согласно пословице ведут все дороги?', 60, 'four_answers');";
$sql_4 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (6, 1, 'Какое из перечисленных государств действительно существует?', 60, 'four_answers');";
$sql_5 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (7, 1, 'Что находится внутри теннисного мяча?', 60, 'four_answers');";
$sql_6 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (8, 1, 'Какой колючий кустарник дал название кисло-сладким леденцам?', 60, 'four_answers');";
$sql_7 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (9, 1, 'Какие племена жили в Европе, а не в Северной Америке?', 60, 'four_answers');";
$sql_8 = "INSERT INTO `questions` (`number`, `round`, `description`, `timer`, `type`) VALUES (10, 1, 'Как называется специальный сосуд, придуманный Пифагором?', 60, 'four_answers');";

$sql_array = array($sql_1, $sql_2, $sql_3, $sql_4, $sql_5,$sql_6,$sql_7, $sql_8);

for ($i = 0; $i < 8; $i++){
  if($mysqli->query($sql_array[$i]) === TRUE){
    printf("успешно \n");
  } else {
    printf("Не удалось выполнить запрос: %s\n", $mysqli->connect_error);
  };
}
