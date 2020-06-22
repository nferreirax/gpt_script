<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsersLoginLog
 * @package App\Models
 * @version June 22, 2020, 6:21 pm UTC
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $ip
 * @property string $client
 * @property string $os
 * @property string $device
 * @property string $brand
 * @property string $model
 * @property boolean $status
 */
class UsersLoginLog extends Model
{
    use SoftDeletes;

    public $table = 'users_login_log';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'username',
        'password',
        'ip',
        'client',
        'os',
        'device',
        'brand',
        'model',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'ip' => 'string',
        'client' => 'string',
        'os' => 'string',
        'device' => 'string',
        'brand' => 'string',
        'model' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'password' => 'required',
        'ip' => 'required',
        'client' => 'required',
        'os' => 'required',
        'device' => 'required',
        'brand' => 'required',
        'model' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
