<?php

namespace App\Helpers\General;



class TextProcess{

    public function lineBreak($text, $length = 25, $cutExact = false){
        $returnText=wordwrap(trim($text), $length, "\n", $cutExact);
        return $returnText;
    }

    public function replaceCharacter($text,$foundChar=" ", $replaceChar="\n"){

    }

}