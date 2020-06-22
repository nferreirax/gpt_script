<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StoreOrdersCrypto
 * @package App\Models
 * @version June 22, 2020, 6:18 pm UTC
 *
 * @property \App\Models\StoreOrder $order
 * @property integer $order_id
 * @property number $crypto_value
 * @property number $crypto_send
 * @property boolean $coin
 */
class StoreOrdersCrypto extends Model
{
    use SoftDeletes;

    public $table = 'store_orders_crypto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_id',
        'crypto_value',
        'crypto_send',
        'coin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'crypto_value' => 'float',
        'crypto_send' => 'float',
        'coin' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_id' => 'required',
        'crypto_value' => 'required',
        'crypto_send' => 'required',
        'coin' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function order()
    {
        return $this->belongsTo(\App\Models\StoreOrder::class, 'order_id');
    }
}
