<?php
require_once 'vendor/autoload.php';

$inputFilename = './input.txt';

if (!file_exists($inputFilename)) {
    throw new Exception('Cannot find input file.');
}

$input = file_get_contents($inputFilename);

$answer = new PHPOxford\Answer();

$options = getopt('p:');

if (isset($options['p']) && $options['p'] === 'two') {
    echo $answer->two($input);
} else {
    echo $answer->one($input);
}
echo "\n";
