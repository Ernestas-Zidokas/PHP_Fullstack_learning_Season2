<?php

Class ThailandSurprise {

    public $clothes;
    private $balls;

    function __construct() {
        $this->balls = rand(0, 1);
    }

}

$surprise = new ThailandSurprise();

?>