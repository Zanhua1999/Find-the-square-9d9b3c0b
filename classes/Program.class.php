<?php

class Program {

    function __construct() {
        $this->application = new Application();
    }

    function init() {
        $this->application->init();
    }

    function update() {
        $this->application->update();
    }
}
?>