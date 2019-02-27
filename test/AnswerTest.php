<?php

namespace PHPOxford;

use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class AnswerTest extends TestCase
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->logger = new Logger('PHPOxford AoC Test logger');
    }

    public function testOne() {
        $answer = new Answer($this->logger);
        $this->assertEquals('one', $answer->one(['']));
    }

    public function testTwo() {
        $answer = new Answer($this->logger);
        $this->assertEquals('two', $answer->two(['']));
    }
}

