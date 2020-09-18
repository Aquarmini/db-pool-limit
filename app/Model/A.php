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
 * @property string $shop_name
 * @property string $pic
 * @property int $school_id
 * @property int $is_cooperate
 * @property int $is_display
 * @property int $is_open
 * @property int $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 */
class A extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'a';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'shop_name', 'pic', 'school_id', 'is_cooperate', 'is_display', 'is_open', 'is_delete', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'school_id' => 'integer', 'is_cooperate' => 'integer', 'is_display' => 'integer', 'is_open' => 'integer', 'is_delete' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
