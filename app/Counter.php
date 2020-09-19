<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App;

use Hyperf\Contract\StdoutLoggerInterface;

class Counter
{
    public $number = 0;

    public function __construct()
    {
        go(function () {
            while (true) {
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
