<?php

class Model_Main extends Model
{

public function get_data()
{
    $sql_get_games = 'SELECT * FROM `games` ORDER BY `number` DESC';
    $data = $this->mysqli->query($sql_get_games);

   return $data;
}
}