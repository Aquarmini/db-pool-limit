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
namespace App\Model;

/**
 * @property int $id
 * @property int $shop_id
 * @property int $school_id
 * @property int $uid
 * @property int $order_num
 * @property int $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 */
class B extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'b';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'shop_id', 'school_id', 'uid', 'order_num', 'is_delete', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'shop_id' => 'integer', 'school_id' => 'integer', 'uid' => 'integer', 'order_num' => 'integer', 'is_delete' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
