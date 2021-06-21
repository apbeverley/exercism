<?php
    
    function acronym ( string $phrase ): string
    {
        $acronym = implode('', array_map(
            static function ( $word ) {
                return mb_substr($word, 0, 1);
            }, preg_split('/\s+|-|\p{Ll}(?=\p{Lu})/u', $phrase)));
        
        return strlen($acronym) > 1 ? mb_strtoupper($acronym) : '';
    }