<?php

include 'classes/Program.class.php';
include 'classes/DataHandler.class.php';
include 'classes/Application.class.php';

$program = new Program();
$program->init();
$program->update();

?>