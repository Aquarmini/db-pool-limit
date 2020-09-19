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

use App\Model\Order;

interface UserOrderServiceInterface
{
    /**
     * 方法1
     * 订单支付后，根据订单增加用户进货额
     */
    public function handle(Order $order): bool;

    /**
     * 方法1
     * 订单退款后，根据订单减少用户进货额
     */
    public function refund(Order $order): bool;
}
