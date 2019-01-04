<?php

//vardump($data) ;

echo "
<section class='game_title'>
    <h1>Игра № <span class='tomato'>{$data['game_number']}</span></h1>
    <h3 class='game_title__author'>Товарищ Валдис-Пельшер - <span class='tomato'>{$data['game_author']}</span></h3>
    <div class='line_decoration line_decoration-horisontal'>_</div>
    
    <div class='flex_row'>
        <div class='round_list'>
            <h4>Раундов: <span class='tomato'>".count($data['game_rounds'])."</span></h4>
        <div class='flex_wrap'>   
 ";
foreach ($data['game_rounds'] as $game_round){
    echo "
            <div class='card darken-transparent'>
                <div class='card-content white-text' style='flex:1'>
                    <span class='card-title'>Раунд № {$game_round['number']} <span class='tomato'>{$game_round['name']}</span></span>
                    <p style='flex:1'>{$game_round['description']}</p>
                </div>
                <div class='rond__short_info card-action'>
                  <span class='short_info__questions'>
                    <i class='material-icons'> assignment </i> 10 вопросов
                  </span>
                        <span class='short_info__timer'>
                    <i class='material-icons'> timer </i> 30 сек
                  </span>
                        <span class='short_info__rewards'>
                    <i class='material-icons'> star </i> {$game_round['rewards']}
                  </span>
                </div>                
            </div>
         ";
};
echo "  
        </div> 
    </div>     
        <div class='line_decoration line_decoration-vertical'>|</div>
        <div class='teams_list'>
        <h4>Команд: <span class='tomato'>".count($data['game_teams'])."</span></h4>
    ";

foreach ($data['game_teams'] as $key => $value){
    $num = $key + 1;
    echo "
    <h5><span class='tomato'>$num.</span> $value</h5>
    ";
}
echo "
        </div>
    </div>
    
    
</section>

";