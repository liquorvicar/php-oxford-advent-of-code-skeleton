<?php
require_once 'vendor/autoload.php';

$inputFilename = './input.txt';

if (!file_exists($inputFilename)) {
    throw new Exception('Cannot find input file.');
}

$input = file($inputFilename);

$logger = new Monolog\Logger('PHPOxford Advent of Code challenge');

$answer = new PHPOxford\Answer($logger);

$options = getopt('p:');

if (isset($options['p']) && $options['p'] === 'two') {
    echo $answer->two($input);
} else {
    echo $answer->one($input);
}
echo "\n";
