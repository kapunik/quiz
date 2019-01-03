<section class="hello">
    <h1>Quiz</h1>
    <h2>Beer <i>&</i> Beard Bar</h2>


    <div class="games_list">
        <?php
            foreach ($data as $game){
               echo "
               <div class='sticker'>
                   
                        <span class='sticker_date'>{$game['date']}</span>
                    
                    <span class='game_number'>{$game['number']}</span> {$game['author']}
                </div>
                    ";
            };
        ?>
    </div>
</section>
