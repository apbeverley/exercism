<?php
    
    /**
     * @throws Exception
     */
    function meetup_day(...$meetupDate): DateTime
    {
        if ($meetupDate[2] === "teenth") {
            $date = (new DateTime("$meetupDate[0]/$meetupDate[1]/13"))
                ->modify($meetupDate[3]);
        } else {
            $date = (new DateTime("$meetupDate[0]/$meetupDate[1]/01"))
                ->modify("$meetupDate[2] $meetupDate[3] of this month");
        }
        
        return $date;
    }