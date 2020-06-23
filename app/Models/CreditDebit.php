<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CreditDebit
 * @package App\Models
 * @version June 21, 2020, 10:08 pm UTC
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property number $amount
 * @property integer $type
 * @property integer $related_id
 */
class CreditDebit extends Model
{
    use SoftDeletes;

    public $table = 'credit_debit';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'amount',
        'wallet_id',
        'type',
        'related_id',
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
        'wallet_id' => 'integer',
        'amount' => 'float',
        'type' => 'integer',
        'related_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'amount' => 'required',
        'wallet_id' => 'required',
        'type' => 'required',
        'related_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
    public function wallet()
    {
        return $this->belongsTo(\App\Models\Wallets::class, 'wallet_id');
    }
}
