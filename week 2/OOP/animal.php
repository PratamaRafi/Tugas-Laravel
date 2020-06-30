<?php

class animal {
    public $name;
    public $legs;
    public $cold_blooded;

     function __construct($name, $legs, $cold_blooded) {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }
    function get_name() {
        return $this->name;
      }
      function get_legs() {
        return $this->legs;
      }
      function get_cold_blooded() {
        return $this->cold_blooded;
      }
} 
    



?>
