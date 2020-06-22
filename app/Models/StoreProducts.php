<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StoreProducts
 * @package App\Models
 * @version June 22, 2020, 6:19 pm UTC
 *
 * @property \App\Models\StoreCat $cat
 * @property \Illuminate\Database\Eloquent\Collection $storeGiftCards
 * @property \Illuminate\Database\Eloquent\Collection $storeOrders
 * @property string $name
 * @property string $description
 * @property number $price
 * @property number $price_discount
 * @property string $price_discount_reason
 * @property number $value
 * @property integer $cat_id
 * @property boolean $notify_admin
 * @property boolean $asset
 * @property string $image_path
 * @property number $qtd_available
 * @property boolean $active
 */
class StoreProducts extends Model
{
    use SoftDeletes;

    public $table = 'store_products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'price',
        'price_discount',
        'price_discount_reason',
        'value',
        'cat_id',
        'notify_admin',
        'asset',
        'image_path',
        'qtd_available',
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
        'description' => 'string',
        'price' => 'float',
        'price_discount' => 'float',
        'price_discount_reason' => 'string',
        'value' => 'float',
        'cat_id' => 'integer',
        'notify_admin' => 'boolean',
        'asset' => 'boolean',
        'image_path' => 'string',
        'qtd_available' => 'float',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'price_discount' => 'required',
        'price_discount_reason' => 'required',
        'value' => 'required',
        'cat_id' => 'required',
        'notify_admin' => 'required',
        'asset' => 'required',
        'qtd_available' => 'required',
        'active' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cat()
    {
        return $this->belongsTo(\App\Models\StoreCat::class, 'cat_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function storeGiftCards()
    {
        return $this->hasMany(\App\Models\StoreGiftCard::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function storeOrders()
    {
        return $this->hasMany(\App\Models\StoreOrder::class, 'product_id');
    }
}
