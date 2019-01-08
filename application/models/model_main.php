<?php

class Model_Main extends Model
{

public function get_data()
{
    $games = R::findAll('games');

   return $games;
}
}