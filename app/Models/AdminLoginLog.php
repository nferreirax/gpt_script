<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AdminLoginLog
 * @package App\Models
 * @version June 21, 2020, 10:05 pm UTC
 *
 * @property \App\Models\Admin $admin
 * @property integer $admin_id
 * @property string $username
 * @property integer $ip
 * @property string $pass
 * @property boolean $status
 */
class AdminLoginLog extends Model
{
    use SoftDeletes;

    public $table = 'admin_login_log';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'admin_id',
        'username',
        'ip',
        'pass',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'admin_id' => 'integer',
        'username' => 'string',
        'ip' => 'integer',
        'pass' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function admin()
    {
        return $this->belongsTo(\App\Models\Admin::class, 'admin_id');
    }
}
