<?php
final class Controller {
  static $controller;

  public static function get() {
    if(!isset($controller)) {
      $controller = new MyController();
      return $controller;
    }
  }
}
