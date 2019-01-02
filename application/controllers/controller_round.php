<?php
/**
 * Created by PhpStorm.
 * User: kapun
 * Date: 02.01.2019
 * Time: 18:08
 */

class Controller_Round extends Controller
{
    function action_index()
    {
        $this->view->generate('round_view.php', 'template_view.php');
    }
}