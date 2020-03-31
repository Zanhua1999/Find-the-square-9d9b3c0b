<?php

class Application {

    public $characters;

    function __construct() {
        $this->dataHandler = new DataHandler(); //kopelen DataHandler.class.php//
    }

    function init() {
        $this->characters = $this->dataHandler->convertDataToArray();
    }
    
    //-1 laatste kolom of rij niet checken, alleen 2 rijen worden gechecked//
    function update() {
        for ($i=0; $i < count($this->characters) - 1; $i++) { 
            for ($j=0; $j < count($this->characters[$i]) - 1; $j++) { 
                if ($this->checkSquareInChars($this->getSquare($i, $j))) {
                    echo $this->characters[$i][$j] . " ($j,$i) \n";
                }
            }
        }
    }
    
    //check 2x2 rijen of alle 4 characters gelijk is//
    function getSquare($i, $j) {
        $square = [];
        $square[0] = $this->characters[$i][$j];
        $square[1] = $this->characters[$i][$j + 1];
        $square[2] = $this->characters[$i + 1][$j];
        $square[3] = $this->characters[$i + 1][$j + 1];
        return $square;
    }
    
    function checkSquareInChars($square) {
        $topLeft = $square[0];
        foreach ($square as $value) {
            if ($topLeft != $value) {
                return false;
            }
        }
        return true;
    }

}


?>