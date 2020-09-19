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
namespace App\Service;

interface UserLevelServiceInterface
{
    /**
     * 获取当前用户等级.
     */
    public function getLevel(int $userId): int;

    /**
     * 获取当前用户下级所需金额.
     */
    public function getRequiredAmount(int $userId): int;

    /**
     * 获取用户当前等级的信息.
     */
    public function getLevelInfo(int $userId): array;

    /**
     * 当前进货额.
     */
    public function getAmount(int $userId): float;

    /**
     * 方法1
     * 增加进货额.
     */
    public function addAmount(int $userId, float $amount): int;
}
