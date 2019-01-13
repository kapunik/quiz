<?php
include_once 'application/models/model_main.php';
include_once 'application/models/model_game.php';

class Controller_Admin extends Controller
{

	function action_index()
	{
		session_start();

		/*
		Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
		Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
		*/
		if ( $_SESSION['admin'] == "12345" )
		{
            $this->model = new Model_Main();
            $games_data = $this->model->get_data();

		    $data = [
		        'title' => 'Quiz календарь',
		        'highlight_menu' => 'events',
                'games_data' => $games_data
            ];
			$this->view->generate('admin_dashboard_view.php', 'admin_template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}

    function action_create(){
        session_start();

        if ( $_SESSION['admin'] == "12345" )
        {
            $this->model = new Model_Game();
            $last_game_number = $this->model->get_last_number();

            $data = [
                'title' => 'Новый Quiz',
                'highlight_menu' => 'create_game',
                'game_number' => $last_game_number
            ];

            $this->view->generate('admin_createGame_view.php', 'admin_template_view.php', $data);
        }
        else
        {
        session_destroy();
        Route::ErrorPage404();
        }
    }

	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
