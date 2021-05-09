<?php
    
    function isLeap(int $year): bool
    {
        return date('L', mktime(0, 0, 0, 1, 1, $year));
    }