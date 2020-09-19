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
namespace HyperfTest\Cases;

use App\Service\Test;
use App\Service\UserLevelServiceInterface;
use HyperfTest\HttpTestCase;
use Mockery;

/**
 * @internal
 * @coversNothing
 */
class UserLevelServiceTest extends HttpTestCase
{
    public function testGetLevel()
    {
        $service = Mockery::mock(UserLevelServiceInterface::class);
        $service->shouldReceive('getLevel')->with(1)->andReturn(1);
        $service->shouldReceive('getLevel')->with(100)->andReturn(3);

        $test = new Test($service);

        $this->assertFalse($test->isGold(1));
        $this->assertTrue($test->isGold(100));
    }
}
