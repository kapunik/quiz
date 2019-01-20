<?php

class Model_Game extends Model
{
    public $number;
    public $author;
    public $date;
    public $rounds;
    public $teams;

    /**
     * @param $mod - номер игры в базе
     * @return array|null - массив с описанием игры
     */
    public function show_game($mod)
    {
//          проверим, в модификаторе число или какаято хуйня, отправим
//          на 404-ю если хуйня какаят
        if (is_numeric($mod)) {
            $this->number = $mod;
        } else {
            Route::ErrorPage404();
        }

        $game_info = R::load('games', $this->number);

        $this->author = $game_info->author;

        $this->date = $game_info->date;

        $this->rounds = $game_info->ownRoundsList;


        $teams_id = $game_info['teams'];
        // если команды не записаны, надо предложить их записать, но покашто отправим нахуй
        if (empty($teams_id)){
            Route::ErrorPage404();
        }
        $teams_id = explode(',', $teams_id);

        $this->teams = $this->get_teams_data($teams_id);


        $data = [
            'game_number' => $this->number,
            'game_author' => $this->author,
            'game_date' => $this->date,
            'game_rounds' => $this->rounds,
            'game_teams' => $this->teams
        ];

        return $data;


    }

       /**
     *Достает из бд инфу по командам
     * @param array $teams_id
     * @return array
     */
    public function get_teams_data(array $teams_id){

        $data = array();

        foreach($teams_id as $id){
            $team = R::load('teams', $id);
            $data[] = $team['name'];
        }


        return $data;
    }

    public function get_last_number(){

        $number = R::getAll('SELECT max(number) as max FROM games');
        $last_number = $number[0]['max'];
        $last_number++;

        return $last_number;
    }

    public function show_round_info($game, $round){
        $round_data = R::findOne('rounds', 'games_id = ? and number = ?', array($game, $round));
        $round_id = $round_data->id;
        $question_count = R::count('questions', 'rounds_id = ?', [$round_id]);
        $data = [
            'game_number' => $game,
            'round_number' => $round,
            'question_number' => '',
            'question_type' => '',
            'description' => $round_data->description,
            'question_timer' => '',
            'question_answers' => '',
            'question_count' => $question_count
        ];

        return $data;
    }

    public function show_answer($game, $round, $question){
        $round_data = R::findOne('rounds', 'games_id = ? and number = ?', array($game, $round));
        $round_id = $round_data->id;
        $question_data = R::findOne('questions', 'rounds_id = ? and number = ?', array($round_id, $question));
        $question_count = R::count('questions', 'rounds_id = ?', [$round_id]);
        $data = [
            'game_number' => $game,
            'round_number' => $round,
            'question_number' => $question_data->number,
            'question_type' => $question_data->type,
            'description' => $question_data->description,
            'question_timer' => $question_data->timer,
            'question_answers' => $question_data->ownAnswersList,
            'question_count' => $question_count
        ];
        return $data;
    }

}
