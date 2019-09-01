<?php

/**
 * Class BeerSong
 */
class BeerSong
{
    /**
     * @param $bottles defines the number of the bottles on the wall
     * @return string
     */
    public function verse($bottles) :string
    {
        return $this->line($bottles);
    }

    /**
     * @param int $start defines which bottle of the song we should start on
     * @param int $end defines the finial bottle of the song
     * @return string response is a string only
     */
    public function verses(int $start, int $end) :string
    {
        $response = "";

        while($start >= $end) {
            $response .= $this->line($start);

            //there are more bottles in the range add a new line
            if($start !== $end) {
                $response .= "\n";
            }

            $start--;
        }

        return $response;
    }

    /**
     * @return string
     * @comment reused the versus function as this is only the full song
     */
    public function lyrics() :string
    {
        return $this->verses(99,0);
    }

    /**
     * @param int $bottles the number on bottles on the wall
     * @return string
     */
    private function line(int $bottles) :string
    {
        $response = "";

        if($bottles !== 0) {
            $bottlesLeft = $bottles-1;

            $values = array(
                ':1' => $bottles,
                ':2' => $bottles == 1 ? 'bottle' : 'bottles'
            );

            $songLine = ":1 :2 of beer on the wall, :1 :2 of beer.\n";

            $response .= str_replace(array_keys($values), $values,  $songLine);

            if($bottlesLeft !== 0) {
                $values = array(
                    ':1' => 'one',
                    ':2' => $bottlesLeft,
                    ':3' => $bottlesLeft == 1 ? 'bottle' : 'bottles'
                );
            } else {
                $values = array(
                    ':1' => 'it',
                    ':2' => 'no more',
                    ':3' => 'bottles'
                );
            }

            $songLine = "Take :1 down and pass it around, :2 :3 of beer on the wall.\n";

            $response .= str_replace(array_keys($values), $values,  $songLine);
        } else {
            $response .= "No more bottles of beer on the wall, no more bottles of beer.\n";
            $response .= "Go to the store and buy some more, 99 bottles of beer on the wall.";
        }

        return $response;
    }
}