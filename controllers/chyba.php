<?php

class Chyba extends Controller {
    function __construct() {
        parent::__construct();
        echo "This is an error";
        
        $this->view->msg = 'This page doesnt exist';
        $this->view->render("chyba/index");
    }
}