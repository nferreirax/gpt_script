<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VipLevel
 * @package App\Models
 * @version June 22, 2020, 6:22 pm UTC
 *
 * @property string $name
 * @property integer $privmessage
 * @property integer $auto_min_reg_time
 * @property integer $auto_points_hold_over
 * @property integer $auto_points_hold_days
 * @property integer $auto_min_earnings
 * @property integer $auto_max_earnings
 * @property number $min_cashout
 * @property string $badge
 * @property string $avatar
 * @property boolean $level
 * @property number $ref_commissions
 * @property number $store_pp_max_24
 * @property number $store_coupons_max_24
 * @property boolean $enabled
 */
class VipLevel extends Model
{
    use SoftDeletes;

    public $table = 'vip_levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'privmessage',
        'auto_min_reg_time',
        'auto_points_hold_over',
        'auto_points_hold_days',
        'auto_min_earnings',
        'auto_max_earnings',
        'min_cashout',
        'badge',
        'avatar',
        'level',
        'ref_commissions',
        'store_pp_max_24',
        'store_coupons_max_24',
        'enabled'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'privmessage' => 'integer',
        'auto_min_reg_time' => 'integer',
        'auto_points_hold_over' => 'integer',
        'auto_points_hold_days' => 'integer',
        'auto_min_earnings' => 'integer',
        'auto_max_earnings' => 'integer',
        'min_cashout' => 'float',
        'badge' => 'string',
        'avatar' => 'string',
        'level' => 'boolean',
        'ref_commissions' => 'float',
        'store_pp_max_24' => 'float',
        'store_coupons_max_24' => 'float',
        'enabled' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'privmessage' => 'required',
        'auto_points_hold_over' => 'required',
        'auto_points_hold_days' => 'required',
        'auto_min_earnings' => 'required',
        'auto_max_earnings' => 'required',
        'min_cashout' => 'required',
        'badge' => 'required',
        'avatar' => 'required',
        'level' => 'required',
        'ref_commissions' => 'required',
        'store_pp_max_24' => 'required',
        'store_coupons_max_24' => 'required',
        'enabled' => 'required'
    ];

    
}
