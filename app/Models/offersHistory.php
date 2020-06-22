<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offersHistory
 * @package App\Models
 * @version June 22, 2020, 6:12 pm UTC
 *
 * @property \App\Models\OfferwallNetwork $network
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property integer $network_id
 * @property number $credits
 * @property boolean $credit_type
 * @property string $txd
 * @property boolean $credited
 * @property integer $offer_id
 * @property string $offer_name
 * @property string|\Carbon\Carbon $date_credited
 */
class offersHistory extends Model
{
    use SoftDeletes;

    public $table = 'offers_history';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'network_id',
        'credits',
        'credit_type',
        'txd',
        'credited',
        'offer_id',
        'offer_name',
        'date_credited'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'network_id' => 'integer',
        'credits' => 'float',
        'credit_type' => 'boolean',
        'txd' => 'string',
        'credited' => 'boolean',
        'offer_id' => 'integer',
        'offer_name' => 'string',
        'date_credited' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'network_id' => 'required',
        'credits' => 'required',
        'credit_type' => 'required',
        'txd' => 'required',
        'credited' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function network()
    {
        return $this->belongsTo(\App\Models\OfferwallNetwork::class, 'network_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
