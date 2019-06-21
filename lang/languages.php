<?php
    function __($str, $lang = null){
        if ( $lang != null ){
            if ( file_exists('lang/'.strtolower($lang).'.php') ){
                include('lang/'.strtolower($lang).'.php');
                if ( isset($texts[$str]) ){
                    $str = $texts[$str];
                }
            }
        }
        return  $str;
    }
?>