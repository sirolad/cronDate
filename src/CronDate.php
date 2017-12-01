<?php

namespace Sirolad;

use DateTime;

class CronDate
{
    protected $dateObject;

    /**
     * CronDate constructor.
     * @param string $dateString
     */
    public function __construct(string $dateString)
    {
        $this->dateObject = new DateTime($dateString);
    }

    /**
     * @return string
     */
    public function getCronDate()
    {
        return $this->getMinute() . ' ' .
            $this->getHour() . ' ' .
            $this->getDayOfMonth() . ' ' .
            $this->getMonth() . ' ' .
            $this->getDayInWeek();
    }

    /**
     * @return int
     */
    protected function getMinute()
    {
        return (int) $this->dateObject->format('i');
    }

    /**
     * @return int
     */
    protected function getHour()
    {
        return (int) $this->dateObject->format('H');
    }

    /**
     * @return int
     */
    protected function getDayOfMonth()
    {
        return (int) $this->dateObject->format('d');
    }

    /**
     * @return int
     */
    protected function getMonth()
    {
        return (int) $this->dateObject->format('m');
    }

    /**
     * @return mixed
     */
    protected function getDayInWeek()
    {
        return $this->dayNumber($this->dateObject->format('l'));
    }

    /**
     * @param $day
     * @return mixed
     */
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
