<?php

class DataHandler {
    //uitgevoerde resultaat return//
    function getFileData() {
       return file_get_contents('assets/input.txt');
    }

    function trimCharacters() {
        $chars = $this->getFileData();
        //echo "zoveel breeks : " . substr_count( $chars, "\n" );//
        $trimmed = preg_replace( "/\r|\n/", "", $chars);
        return $trimmed;
    }

    //zet de data in een tweedimensionale array//
    function convertDataToArray() {
        $array = [];
        $data = $this->trimCharacters();
        $chars = $this->getFileData();
        $breaks = substr_count( $chars, "\n" ) + 1;
        $rowLength = strlen($data) / $breaks;
        for ($i = 0; $i < strlen($data); $i = $i + $rowLength) {
            $subArray = [];
            for ($j=$i; $j < $i + $rowLength; $j++) { 
                array_push($subArray, $data[$j]);
            }
            array_push($array, $subArray);
        }
        return $array;
    }
}

?>