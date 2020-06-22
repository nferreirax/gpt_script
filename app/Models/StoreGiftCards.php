<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StoreGiftCards
 * @package App\Models
 * @version June 22, 2020, 6:16 pm UTC
 *
 * @property \App\Models\StoreProduct $product
 * @property \Illuminate\Database\Eloquent\Collection $storeOrders
 * @property string $name
 * @property integer $product_id
 * @property number $value
 * @property string $link
 * @property boolean $active
 */
class StoreGiftCards extends Model
{
    use SoftDeletes;

    public $table = 'store_gift_cards';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'product_id',
        'value',
        'link',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'product_id' => 'integer',
        'value' => 'float',
        'link' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'product_id' => 'required',
        'value' => 'required',
        'link' => 'required',
        'active' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\StoreProduct::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function storeOrders()
    {
        return $this->hasMany(\App\Models\StoreOrder::class, 'card_id');
    }
}
