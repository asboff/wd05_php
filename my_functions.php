<?php

    function debug($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

    function sum(int $a, int $b, ...$args){
        $sum = $a + $b;
        return $sum;
    }

    function shortText ($text) {
        $shortText = strip_tags($text);
        $shortText = trim($shortText);
        $shortText = mb_substr($shortText, 0, 150);
        $pos = mb_strrpos($shortText, ' ');
        if ($pos !== false) {
            $shortText = mb_substr($shortText, 0, $pos);
        }
        $shortText .= " ...";
        return $shortText;
    }