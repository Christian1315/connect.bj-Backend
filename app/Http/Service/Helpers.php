<?php

if (!function_exists('cut_text')) {
    function cut_text($text)
    {
        return substr($text,0,100)."  ...";
    }
}

?>