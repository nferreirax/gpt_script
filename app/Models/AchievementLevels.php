<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AchievementLevels
 * @package App\Models
 * @version June 21, 2020, 10:00 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $achievementLogs
 * @property string $name
 * @property string $badge
 * @property integer $min_offers
 * @property integer $min_points
 * @property number $bonus_fixed
 * @property number $bonus_percentage
 * @property number $bonus_next_month
 * @property boolean $level
 */
class AchievementLevels extends Model
{
    use SoftDeletes;

    public $table = 'achievement_levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'badge',
        'min_offers',
        'min_points',
        'bonus_fixed',
        'bonus_percentage',
        'bonus_next_month',
        'level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'badge' => 'string',
        'min_offers' => 'integer',
        'min_points' => 'integer',
        'bonus_fixed' => 'float',
        'bonus_percentage' => 'float',
        'bonus_next_month' => 'float',
        'level' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'badge' => 'required',
        'min_offers' => 'required',
        'min_points' => 'required',
        'bonus_fixed' => 'required',
        'bonus_percentage' => 'required',
        'bonus_next_month' => 'required',
        'level' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function achievementLogs()
    {
        return $this->hasMany(\App\Models\AchievementLog::class, 'level_id');
    }
}
