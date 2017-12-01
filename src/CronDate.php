<?php

namespace Sirolad;

use DateTime;

class CronDate
{
    protected $minute;

    protected $dateObject;

    public function __construct(string $dateString)
    {
        $this->dateObject = new DateTime($dateString);
    }

    public function getCronDate()
    {
        return $this->getMinute() . ' ' .
            $this->getHour() . ' ' .
            $this->getDayOfMonth() . ' ' .
            $this->getMonth() . ' ' .
            $this->getDayInWeek();
    }

    protected function getMinute()
    {
        return (int) $this->dateObject->format('i');
    }

    protected function getHour()
    {
        return (int) $this->dateObject->format('H');
    }

    protected function getDayOfMonth()
    {
        return (int) $this->dateObject->format('d');
    }

    protected function getMonth()
    {
        return (int) $this->dateObject->format('m');
    }

    protected function getDayInWeek()
    {
        return $this->dayNumber($this->dateObject->format('l'));
    }

    protected function dayNumber($day)
    {
        $days = [
            'Sunday' => 0,
            'Monday' => 1,
            'Tuesday' => 2,
            'Wednesday' => 3,
            'Thursday' => 4,
            'Friday' => 5,
            'Saturday' => 6
        ];

        return $days[$day];
    }
}

$a = new CronDate('2017-12-2 11:02:25');
echo $a->getCronDate();
// print_r($a);