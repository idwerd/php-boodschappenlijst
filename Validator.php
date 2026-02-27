<?php

class Validator {
    
    public static function string($value, $min = 1, $max = INF) {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function integer($value, $min) {
        return $value >= $min;
    }

    public static function decimal($value, $min, $max) {

        return $value >= $min && $value <= $max;
    }
}