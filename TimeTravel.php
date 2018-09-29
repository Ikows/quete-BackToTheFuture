<?php
/**
 * Created by PhpStorm.
 * User: ikows
 * Date: 29/09/18
 * Time: 23:44
 */

class TimeTravel
{
    public $start;
    public $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;

    }

    public function findDate($interval)
    {
        $this->end = new dateTime(date("Y-m-d H:i:s", strtotime("1985-12-31 0:0:0") + $interval));
    }


    public function getTravelInfos()
    {
        return $this->start->diff($this->end)->format("Il y a %Y années, %m mois,
         %d jours, %h heures, %i minutes et %s secondes entre ces deux dates.");
    }

    public function backToTheFutureStepByStep($step)
    {
        $inter = new dateInterval($step);
        $iko = new datePeriod($this->end, $inter, $this->start);
        return $iko;

    }

}

