<?php 

class ErrorLogger {
  static function log($e) {
    $line = $e->getLine();
    $file = $e->getFile();
    echo sprintf($e->msg . "({$file}:{$line})" . "<br/>",
      get_class($e), $e->caller_class, ...$e->data);
  }
}