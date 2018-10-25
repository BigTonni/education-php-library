<?php

require_once __DIR__ . '/vendor/autoload.php';

$lessons1 = new \Vendor\Education\Seminar( 4, new \Vendor\Education\TimedCostStrategy() );
$lessons2 = new \Vendor\Education\Lecture( 4, new \Vendor\Education\FixedCostStrategy() );

$mgr = new \Vendor\Education\RegistrationMgr();

echo $mgr->register( $lessons1 ). '<br/>';
echo $mgr->register( $lessons2 ). '<br/>';
