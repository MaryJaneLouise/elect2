<?php

class Date {
    public static function showDate($input) {
        $date = strtotime($input);
        return date("m/d/Y", $date);
    }
}?>