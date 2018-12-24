<?php

/**
 *
 */
class question
{

  public $id;
  public $number;
  public $round;
  public $description;
  public $timer;
  public $type;

  function __construct($number, $description, $round){
    $this->number = $number;
    $this->description = $description;
    $this->round = $round;
  }
  public function show(){
    echo "<h4>Раунд $this->round > Вопрос № $this->number</h4>";
    echo "<div class='question_description'>$this->description</div>";
  }

};

class answer
{
  public $number;
  public $description;
  public $truth;

  function __construct($number, $description, $truth){
    $this->number = $number;
    $this->description = $description;
    if ($truth == 1){
      $this->truth = 'answer-true';
    } else {
      $this->truth = ' ';
    }

  }
  public function show(){
    echo "<div class='answer $this->truth'>
      <span class='answer__number'>$this->number . </span>
      <span class='answer__description'>$this->description</span>
    </div>";
  }
}
