<?php

namespace Vendor\Education;

class MailNotifier extends Notifier
{
    /**
     * @param string $message
     * @return string
     */
    public function inform($message)
    {
        return "MAIL notification: {$message}\n";
    }
}
