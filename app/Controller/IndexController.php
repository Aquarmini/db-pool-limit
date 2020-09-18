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
namespace App\Controller;

use Hyperf\DbConnection\Db;

class IndexController extends Controller
{
    public function index()
    {
        Db::table('b')
            ->leftJoin('a', 'b.shop_id', '=', 'a.id')
            ->where([
                ['b.uid', '=', 1287255],
                ['b.school_id', '=', 1899],
                ['a.is_open', '=', 1],
                ['a.is_delete', '=', 0],
                ['a.is_cooperate', '=', 1],
                ['a.is_display', '=', 1],
                ['a.is_delete', '=', 0],
            ])
            ->groupBy('b.school_id', 'b.shop_id')
            ->orderByRaw('sum(b.order_num) DESC')
            ->limit(10)
            ->get([
                'b.shop_id',
                'a.shop_name',
                'a.pic',
            ]);

        // Db::selectOne('SELECT * FROM a;');

        var_dump(memory_get_usage(true));

        return $this->response->success();
    }
}
