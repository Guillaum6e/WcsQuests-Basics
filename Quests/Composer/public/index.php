<?php

require '../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello,Farm!');
$output = $bessie->say();
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $output;
echo $bessie;