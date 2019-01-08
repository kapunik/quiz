<?php
class Model
{

    function  __construct(){

        R::setup('mysql:host=localhost;dbname=quiz', 'quiz', 'quiz');

    }

    public function get_data()
    {
    }
}