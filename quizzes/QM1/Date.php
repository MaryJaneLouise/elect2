<?php

namespace StaticMethodUsage;

class Date {
    public static function showDate($input) {
        $date = strtotime($input);
        echo date("F/j/Y",$date);
    }
}?>