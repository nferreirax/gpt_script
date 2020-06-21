<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admin
 * @package App\Models
 * @version June 21, 2020, 9:55 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $adminLoginLogs
 * @property string $session_id
 * @property string $username
 * @property string $password
 * @property string $name_first
 * @property string $name_last
 * @property string $avatar
 * @property boolean $active
 * @property integer $last_login_timestamp
 * @property boolean $failed_logins
 * @property integer $last_failed_login
 */
class Admin extends Model
{
    use SoftDeletes;

    public $table = 'admins';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'session_id',
        'username',
        'password',
        'name_first',
        'name_last',
        'avatar',
        'active',
        'last_login_timestamp',
        'failed_logins',
        'last_failed_login'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'session_id' => 'string',
        'username' => 'string',
        'password' => 'string',
        'name_first' => 'string',
        'name_last' => 'string',
        'avatar' => 'string',
        'active' => 'boolean',
        'last_login_timestamp' => 'integer',
        'failed_logins' => 'boolean',
        'last_failed_login' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'username' => 'required',
        'active' => 'required',
        'failed_logins' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function adminLoginLogs()
    {
        return $this->hasMany(\App\Models\AdminLoginLog::class, 'admin_id');
    }
}
