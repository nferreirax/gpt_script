<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offersLog
 * @package App\Models
 * @version June 22, 2020, 6:13 pm UTC
 *
 * @property \App\Models\OfferwallNetwork $network
 * @property \App\Models\User $user
 * @property integer $network_id
 * @property integer $network_type
 * @property string $transaction_id
 * @property integer $user_id
 * @property string $offer_id
 * @property string $message
 * @property string $ip
 * @property string $full_call
 */
class OffersLog extends Model
{
    use SoftDeletes;

    public $table = 'offers_log';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'network_id',
        'network_type',
        'transaction_id',
        'user_id',
        'offer_id',
        'message',
        'ip',
        'full_call'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'network_id' => 'integer',
        'network_type' => 'integer',
        'transaction_id' => 'string',
        'user_id' => 'integer',
        'offer_id' => 'string',
        'message' => 'string',
        'ip' => 'string',
        'full_call' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'network_id' => 'required'
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
