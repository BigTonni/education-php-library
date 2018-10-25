<?php

namespace Vendor\Education;

use Vendor\Education\Lesson;

class TimedCostStrategy extends CostStrategy
{
    /**
     * @param Lesson $lesson
     * @return int
     */
    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration() * 5;
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return 'hourly rate';
    }
}
