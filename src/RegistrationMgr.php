<?php

namespace Vendor\Education;

use Vendor\Education\Lesson;

class RegistrationMgr
{
    /**
     * @param Lesson $lesson
     * @return Notifier
     */
    public function register(Lesson $lesson)
    {
        // do something with this Lesson

        $notifier = Notifier::getNotifier();
        return $notifier->inform( "new lesson: cost ({$lesson->cost()}), type - {$lesson->chargeType()}" );
    }
}
