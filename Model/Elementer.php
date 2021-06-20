<?php 

class Elementer{
    public static function Create($block){
        $layout = fopen("Src/Blocks.layout", 'r');
        $reader = fread($layout, 9999);
        // $data = self::getBetween($reader, "{".$block."}" , "{/".$block."}");
        $data = self::getBetween($reader, '{'.$block.'}' , '{/'.$block.'}');
        echo $data;

        // VARIABLES
        // $regex = '~(:\w+)~';
        // if (preg_match_all($regex, $data, $matches, PREG_PATTERN_ORDER)) {
        // foreach ($matches[1] as $word) {
        //     echo $word .'<br/>';
        // }
        // }



        $bits = explode(' ', $data);
        $newquery = array();

        foreach($bits as $bit){
            if(strlen($bit) > 0 && $bit[0] === '#') {
                echo $bit;
            }
        }
    }

    public static function getBetween($string, $start = "", $end = ""){
        if (strpos($string, $start)) {
            $startCharCount = strpos($string, $start) + strlen($start);
            $firstSubStr = substr($string, $startCharCount, strlen($string));
            $endCharCount = strpos($firstSubStr, $end);
            if ($endCharCount == 0) {
                $endCharCount = strlen($firstSubStr);
            }
            return substr($firstSubStr, 0, $endCharCount);
        } else {
            ErrorHandler::init([ 
                "header" => "Elementer ERROR",
                "code" => 404,
                "text" => "Block $start doesn't exists!",
                "file" => "__FILE__",
                "line" => "__LINE__"
            ]);
            return;
        }
    }
}