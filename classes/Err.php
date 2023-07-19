<?php

abstract class Err extends Exception {
  public $msg;
  public $caller_class;
  public $data;
  
  function __construct(object $caller, ...$data) {
    $this->caller_class = get_class($caller);
    $this->data = $data;
  }

  static function panic($caller, $name) {
    throw new static($caller, $name);
  }
}