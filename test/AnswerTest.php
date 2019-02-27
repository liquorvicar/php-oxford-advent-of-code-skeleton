<?php

namespace PHPOxford;

use PHPUnit\Framework\TestCase;

class AnswerTest extends TestCase
{

    public function testOne() {
        $answer = new Answer();
        $this->assertEquals('one', $answer->one(['']));
    }

    public function testTwo() {
        $answer = new Answer();
        $this->assertEquals('two', $answer->two(['']));
    }
}

