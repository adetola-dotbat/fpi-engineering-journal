<?php

if (!function_exists('to_upper')) {
    function to_upper($text) {
        return strtoupper($text);
    }
}

if (!function_exists('limit_words')) {
    function limit_words($text, $limit = 130) {
        $words = preg_split('/\s+/', $text);
        if (count($words) > $limit) {
            $words = array_slice($words, 0, $limit);
            return implode(' ', $words) . '...';
        }

        return $text;
    }
}
