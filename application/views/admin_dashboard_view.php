<div class="games_list">
    <?php
    foreach ($data['games_data'] as $game){
        $date = date("j F",strtotime(str_replace('/','-',$game['date'])));
        echo "                             
                <div class='mdl-card mdl-shadow--2dp'>
                  <div class='mdl-card__title mdl-card--expand'>
                      <h3>Игра № {$game['number']}</h3>                   
                  </div>
                  <div class='mdl-card__supporting-text'>
                     <div class='flex-row'><i class='material-icons'>event</i> {$date}</div>                                                            
                     <div class='flex-row'><i class='material-icons'>person</i>  {$game['author']}</div>
                  </div>
                  <div class='mdl-card__actions mdl-card--border flex-row'>
                  
                    <button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored'>
                        <i class='material-icons'>send</i>
                    </button>
                    <button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored'>
                        <i class='material-icons'>attachment</i>
                    </button>
                    <button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored'>
                        <i class='material-icons'>create</i>
                    </button>
                    <div class='mdl-layout-spacer'></div>
                    <button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored'>
                        <i class='material-icons'>delete_forever</i>
                    </button>
                    
                  </div>
                </div>
                    ";
    };
    ?>
</div>

