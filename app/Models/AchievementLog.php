<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AchievementLog
 * @package App\Models
 * @version June 21, 2020, 10:03 pm UTC
 *
 * @property \App\Models\AchievementLevel $level
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property integer $level_id
 * @property number $offers
 * @property number $points
 * @property number $bonus_credited
 */
class AchievementLog extends Model
{
    use SoftDeletes;

    public $table = 'achievement_log';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'level_id',
        'offers',
        'points',
        'bonus_credited'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'level_id' => 'integer',
        'offers' => 'float',
        'points' => 'float',
        'bonus_credited' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'level_id' => 'required',
        'offers' => 'required',
        'points' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function level()
    {
        return $this->belongsTo(\App\Models\AchievementLevel::class, 'level_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
