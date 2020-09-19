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

/**
 * @internal
 * @coversNothing
 */
class Test
{
    /**
     * @var UserLevelServiceInterface
     */
    protected $userLevelService;

    public function __construct(UserLevelServiceInterface $userLevelService)
    {
        $this->userLevelService = $userLevelService;
    }

    public function isGold($userId): bool
    {
        return $this->userLevelService->getLevel($userId) >= 3;
    }
}
