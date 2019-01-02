<?php
class Model
{
    public $mysqli;

    function  __construct(){
        $this->mysqli = new mysqli('localhost', 'quiz', 'quiz', 'quiz');
    }

    public function get_data()
    {
    }
}