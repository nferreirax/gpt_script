<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StoreCategory
 * @package App\Models
 * @version June 22, 2020, 6:15 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $storeProducts
 * @property string $name
 * @property boolean $order
 * @property string $img
 * @property boolean $active
 */
class StoreCategory extends Model
{
    use SoftDeletes;

    public $table = 'store_cat';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'order',
        'img',
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
        'order' => 'boolean',
        'img' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'order' => 'required',
        'img' => 'required',
        'active' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function storeProducts()
    {
        return $this->hasMany(\App\Models\StoreProduct::class, 'cat_id');
    }
}
