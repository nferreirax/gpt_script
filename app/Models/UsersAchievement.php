<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsersAchievement
 * @package App\Models
 * @version June 22, 2020, 6:20 pm UTC
 *
 * @property \App\Models\User $user
 * @property integer $offers
 * @property integer $offers_last_month
 * @property number $points
 * @property number $points_last_month
 */
class UsersAchievement extends Model
{
    use SoftDeletes;

    public $table = 'users_achievement';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'offers',
        'offers_last_month',
        'points',
        'points_last_month'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'offers' => 'integer',
        'offers_last_month' => 'integer',
        'points' => 'decimal:2',
        'points_last_month' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
