<?php

namespace Vendor\Education;

abstract class Notifier
{
    /**
     * @return MailNotifier || TextNotifier
     */
    public static function getNotifier()
    {
        // concrete class according to configuration or other logic
        if (mt_rand(1, 2) === 1) {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }

    /**
     * @param string $message
     */
    abstract public function inform( $message );
}
