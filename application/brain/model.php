<?php
class Model
{
    public $mysqli;

    function  __construct(){
        $this->mysqli = new mysqli('localhost', 'quiz', 'quiz', 'quiz');

        if (!$this->mysqli->set_charset("utf8")) {
            printf("Ошибка при загрузке набора символов utf8: %s\n", $this->mysqli->error);
            exit();
        }
    }

    public function get_data()
    {
    }
}