<?php


class Lift
{
    private $current_flour = 1;
    private $max_floor = 9;
    private $min_floor = 1;
    private $wait_time = 0;

    function setCurrentFloor($current) {
        $this->current_flour = $current;
    }

    function move($floor) {
        if ($floor > $this->max_floor || $floor < $this->min_floor) {
            return 'Not such floor';
        }
        $haveToPass = abs($floor-$this->current_flour);
        for ($i = 0; $i < $haveToPass; $i++) {
            echo 'you\'re on floor '.$this->current_flour."\n";
            $this->wait_time++;
            if ($floor > $this->current_flour) {
                $this->current_flour++;
            }
            if ($floor < $this->current_flour) {
                $this->current_flour--;
            }
            if ($floor == $this->current_flour) {
                break;
            }
        }
        return 'you reached your destination: '.$this->current_flour."\n".'Ypur way took '.$this->wait_time.' seconds';
    }

}