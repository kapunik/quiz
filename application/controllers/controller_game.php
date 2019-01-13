<?php

class Controller_Game extends Controller
{
    function __construct()
    {
        $this->model = new Model_Game();
        $this->view = new View();
    }

    function action_show($mod)
    {
        $data = $this->model->show_game($mod);
        $this->view->generate('game_view.php', 'template_view.php', $data);

    }


}