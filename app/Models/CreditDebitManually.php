<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CreditDebitManually
 * @package App\Models
 * @version June 21, 2020, 10:09 pm UTC
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property number $amount
 * @property string $description
 * @property string $admin_notes
 */
class CreditDebitManually extends Model
{
    use SoftDeletes;

    public $table = 'credit_debit_manually';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'amount',
        'wallet_id',
        'description',
        'admin_notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'amount' => 'float',
        'wallet_id' => 'integer',        
        'description' => 'string',
        'admin_notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'amount' => 'required',
        'wallet_id' => 'required'
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
