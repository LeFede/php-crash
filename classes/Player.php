<?php

class Player {
  private string $name;
  private Stats $stats;

  function __construct() {
    $this->name = 'Fed';
    $this->stats = new Stats($this);
  }

  function __get($name) {
    try {
      return match ($name) {
        'name'  => $this->name,
        'stats' => $this->stats,
        default => NoPropertyError::panic($this, $name),
      };
    } catch(Exception $e) {
      ErrorLogger::log($e);
    }
  }
}