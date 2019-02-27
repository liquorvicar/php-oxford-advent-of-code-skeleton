<?php

namespace PHPOxford;

use Psr\Log\LoggerInterface;

class Answer
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function one(Array $input) {
        $this->logger->info('Running part one');
        return 'one';
    }

    public function two(Array $input) {
        $this->logger->info('Running part two');
        return 'two';
    }
}

