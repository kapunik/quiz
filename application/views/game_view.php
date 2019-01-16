<?php

//vardump($data) ;

echo "
<section class='game_title'>
    <h1>Игра № <span class='tomato'>{$data['game_number']}</span></h1>
    <h2 class='game_title__author'>Товарищ Валдис-Фельшер - <span class='tomato'>{$data['game_author']}</span></h2>
       
    <div class='flex_row'>
        <div class='round_list'>
            <h3>Раундов: <span class='tomato'>".count($data['game_rounds'])."</span></h3>
        <div>   
 ";
    echo "
    <table>
        <thead>
            <tr>
                <th colspan='3'>Описание раунда</th>
                <th class='short_info__questions'><span class='icon-answer'></span> Кол-&nbsp;во</th>
                <th class='short_info__timer'><span class='icon-timer'></span> Cек</th>
                <th class='short_info__rewards'><span class='icon-star'></span> Баллов</th>
            </tr>
        </thead>
        <tbody>
           
       
    ";
foreach ($data['game_rounds'] as $game_round){
    echo "

            <tr><td colspan='6'><img src='/img/border2.png'></td></tr>
            <tr>
                <td>№ {$game_round['number']}</td>
                <td><span class='tomato'>{$game_round['name']}</span></td>
                <td style='width: 45%'>{$game_round['description']}</td>
                <td class='short_info__questions'>10</td>
                <td class='short_info__timer'>60</td>
                <td class='short_info__rewards'>{$game_round['rewards']}</td>
            </tr>
         ";
};
echo "   </tbody>
    </table>
        </div> 
    </div>     
    <div class='flex-column'>
    
   
        <div class='teams_list'>
        <h3>Команд: <span class='tomato'>".count($data['game_teams'])."</span></h3>
    ";

foreach ($data['game_teams'] as $key => $value){
    $num = $key + 1;
    echo "
    <h5><span class='tomato'>$num.</span> $value</h5>
    ";
}
echo "
</div> 

<div id='add_team'><span class='tomato'>+<span> Добавить команду </div>
<a href='/game/play/{$data['game_number']}-1-info' class='play play_round'><span class='icon-play'></span></a>
        </div>
    </div>
    
    
</section>

";