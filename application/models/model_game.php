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
        if(is_numeric($mod)){
            $this->number = $mod;
        } else {
            Route::ErrorPage404();
        }

        $sql_get_game = "SELECT * FROM `games` WHERE `number` = $this->number LIMIT 1";
        $query_result = $this->mysqli->query($sql_get_game);
        $game_info = $query_result->fetch_assoc();

        $this->author = $game_info['author'];

        $this->date = $game_info['date'];

        $this->rounds = $this->get_rounds_data();

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
     *Достает из бд инфу по раундам, привязанным к текущей игре
     */
    public function get_rounds_data(){
        $sql_get_rounds = "SELECT * FROM `rounds` WHERE `game` = $this->number ORDER BY `number`";
        $query_result = $this->mysqli->query($sql_get_rounds);
        $data = $query_result->fetch_all(MYSQLI_ASSOC);

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
            $sql_get_teams = "SELECT `name` FROM `teams` WHERE `id` = $id LIMIT 1";
            $query_result = $this->mysqli->query($sql_get_teams);
            $team = $query_result->fetch_assoc();
            $data[] = $team['name'];
        }


        return $data;
    }
}