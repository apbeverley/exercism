<?php

function from($date) {
    $gigasecond = 1000000000;

    $d = new DateTime();
    
    $d->setTimestamp($date->getTimestamp() + $gigasecond);

    return $d;
}