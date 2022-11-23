<?php 

namespace Helper {
    class InputHelper
    {
        static function inputHelper(string $info){
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);
        }
    }
}

?>