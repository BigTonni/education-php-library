<?php

namespace Vendor\Education;

class TextNotifier extends Notifier
{
    /**
     * @param string $message
     * @return string
     */
    public function inform($message)
    {
        return "TEXT notification: {$message}\n";
    }
} 
