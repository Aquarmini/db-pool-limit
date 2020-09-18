<?php
namespace App;

use Hyperf\Contract\StdoutLoggerInterface;

class Counter
{
    public $number = 0;

    public function __construct()
    {
        go(function () {
            while (true){
                sleep(1);
                di()->get(StdoutLoggerInterface::class)->info($this->number);
            }
        });
    }

    public function incr(): int
    {
        return $this->number++;
    }
}
