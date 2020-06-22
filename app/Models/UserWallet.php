<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserWallet
 * @package App\Models
 * @version June 22, 2020, 6:21 pm UTC
 *
 * @property \App\Models\User $user
 * @property \App\Models\Wallet $wallet
 * @property integer $user_id
 * @property integer $wallet_id
 * @property number $amount
 */
class UserWallet extends Model
{
    use SoftDeletes;

    public $table = 'users_wallets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'wallet_id',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'wallet_id' => 'integer',
        'amount' => 'decimal:20'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'wallet_id' => 'required',
        'amount' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function wallet()
    {
        return $this->belongsTo(\App\Models\Wallet::class, 'wallet_id');
    }
}
