<?php

 class View {
     
     function __contruct() {
         echo 'This is a View';
     }
     
     public function render($name) {
        require 'views/' .$name . '.php' ;
     }
 }