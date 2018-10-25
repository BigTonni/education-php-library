<?php

namespace Vendor\Education;

use Vendor\Education\Lesson;

class FixedCostStrategy extends CostStrategy
{
    /**
     * @param Lesson $lesson
     * @return int
     */
    public function cost(Lesson $lesson)
    {
        return 30;
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return 'fixed rate';
    }
}
