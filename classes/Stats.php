<?php

class Stats {
  private Player $owner;
  
  private int $str = 1;
  private int $def = 1;
  private int $spd = 1;
  private int $wis = 1;

  function __construct($owner) {
    $this->owner = $owner;
  }

  function __get($name) {
    try {
      return match ($name) {
        'str' => $this->str,
        'def' => $this->def,
        'spd' => $this->spd,
        'wis' => $this->wis,
        'owner' => $this->owner,
        default => NoPropertyError::panic($this, $name),
      };
    } catch(Exception $e) {
      ErrorLogger::log($e);
    }
  }
}