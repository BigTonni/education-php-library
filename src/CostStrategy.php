<?php

namespace Vendor\Education;

use Vendor\Education\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);
    abstract public function chargeType();
}
