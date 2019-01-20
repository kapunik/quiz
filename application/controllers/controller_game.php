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


    /**
     * @param $mod - string;
     */
    function action_play($mod){
//        разобьем принятую строку на переменные
        list($game, $round, $question) = explode('-', $mod);

//        если третий параметр пустой - пошлем нахуй
        if($question == NULL){ Route::ErrorPage404(); };

//        если там "инфо" - покажем описание раунда
        if($question == 'info') {
            $data = $this->model->show_round_info($game, $round);
            $this->view->generate('play_view.php', 'template_view.php', $data);
        }

//        если там число - покажем сопсно вопрос
        if(is_numeric($question)) {
            $data = $this->model->show_answer($game, $round, $question);
            $this->view->generate('play_view.php', 'template_view.php', $data);
        }

        if($question == 'result') {
            $this->view->generate('result_round_view.php', 'template_view.php');
        }


    }
}