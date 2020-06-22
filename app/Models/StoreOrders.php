<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StoreOrders
 * @package App\Models
 * @version June 22, 2020, 6:18 pm UTC
 *
 * @property \App\Models\StoreGiftCard $card
 * @property \App\Models\StoreProduct $product
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $storeOrdersCryptos
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $card_id
 * @property number $price
 * @property number $value
 * @property string $ip
 * @property boolean $status
 * @property string|\Carbon\Carbon $date_processed
 */
class StoreOrders extends Model
{
    use SoftDeletes;

    public $table = 'store_orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'product_id',
        'card_id',
        'price',
        'value',
        'ip',
        'status',
        'date_processed'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer',
        'card_id' => 'integer',
        'price' => 'float',
        'value' => 'float',
        'ip' => 'string',
        'status' => 'boolean',
        'date_processed' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'product_id' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function card()
    {
        return $this->belongsTo(\App\Models\StoreGiftCard::class, 'card_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\StoreProduct::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function storeOrdersCryptos()
    {
        return $this->hasMany(\App\Models\StoreOrdersCrypto::class, 'order_id');
    }
}
