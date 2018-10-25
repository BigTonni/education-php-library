<?php

namespace Vendor\Education;

use Vendor\Education\CostStrategy;

abstract class Lesson
{
    /**
     * @var int
     */
    private   $duration;

    /**
     * @var CostStrategy
     */
    private   $costStrategy;

    /**
     * @param int $duration
     * @param CostStrategy $strategy
     */
    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    /**
     * @return CostStrategy
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return CostStrategy
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
