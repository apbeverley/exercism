<?php
    
    function acronym ( string $phrase ): string
    {
        $acronym = implode('', array_map(
            static function ( $word ) {
                return mb_strtoupper($word[0]);
            }, preg_split('/( |-)/', $phrase)));
        
        return strlen($acronym) > 1 ? $acronym : '';
    }