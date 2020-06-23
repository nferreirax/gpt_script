<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offerwallNetworks
 * @package App\Models
 * @version June 22, 2020, 6:14 pm UTC
 *
 * @property \App\Models\Wallet $creditWallet
 * @property \Illuminate\Database\Eloquent\Collection $offersHistories
 * @property \Illuminate\Database\Eloquent\Collection $offersLogs
 * @property boolean $enabled
 * @property boolean $enabled_postback
 * @property string $name
 * @property string $url
 * @property string $logo_image
 * @property string $iframe_id
 * @property string $iframe_key
 * @property string $iframe_url
 * @property string $postback_ips
 * @property integer $credit_wallet
 * @property number $credit_multiplier
 * @property boolean $order
 * @property integer $payment_hold
 * @property integer $payment_hold_over
 * @property integer $ref_commissions
 * @property boolean $show_offerwalls
 * @property boolean $show_earn_passive
 * @property boolean $show_earn_surveys
 * @property boolean $show_earn_offerwalls
 * @property boolean $category
 * @property string $postback_method
 * @property string $postback_tid
 * @property string $postback_rate
 * @property string $postback_subid
 * @property string $postback_status
 * @property string $postback_value_reverse
 * @property string $postback_value_credit
 * @property string $postback_success
 * @property string $postback_error
 * @property string $postback_cname
 * @property string $postback_cid
 * @property string $postback_reversal_reason
 * @property string $postback_filter_duplicates
 * @property string $postback_signature
 * @property string $postback_signature_encryption
 * @property string $postback_signature_built
 * @property string $postback_url
 * @property string $postback_password
 */
class OfferwallNetworks extends Model
{
    use SoftDeletes;

    public $table = 'offerwall_networks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'enabled',
        'enabled_postback',
        'name',
        'url',
        'logo_image',
        'iframe_id',
        'iframe_key',
        'iframe_url',
        'postback_ips',
        'credit_wallet',
        'credit_multiplier',
        'order',
        'payment_hold',
        'payment_hold_over',
        'ref_commissions',
        'show_offerwalls',
        'show_earn_passive',
        'show_earn_surveys',
        'show_earn_offerwalls',
        'category',
        'postback_method',
        'postback_tid',
        'postback_rate',
        'postback_subid',
        'postback_status',
        'postback_value_reverse',
        'postback_value_credit',
        'postback_success',
        'postback_error',
        'postback_cname',
        'postback_cid',
        'postback_reversal_reason',
        'postback_filter_duplicates',
        'postback_signature',
        'postback_signature_encryption',
        'postback_signature_built',
        'postback_url',
        'postback_password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enabled' => 'boolean',
        'enabled_postback' => 'boolean',
        'name' => 'string',
        'url' => 'string',
        'logo_image' => 'string',
        'iframe_id' => 'string',
        'iframe_key' => 'string',
        'iframe_url' => 'string',
        'postback_ips' => 'string',
        'credit_wallet' => 'integer',
        'credit_multiplier' => 'float',
        'order' => 'boolean',
        'payment_hold' => 'integer',
        'payment_hold_over' => 'integer',
        'ref_commissions' => 'integer',
        'show_offerwalls' => 'boolean',
        'show_earn_passive' => 'boolean',
        'show_earn_surveys' => 'boolean',
        'show_earn_offerwalls' => 'boolean',
        'category' => 'boolean',
        'postback_method' => 'string',
        'postback_tid' => 'string',
        'postback_rate' => 'string',
        'postback_subid' => 'string',
        'postback_status' => 'string',
        'postback_value_reverse' => 'string',
        'postback_value_credit' => 'string',
        'postback_success' => 'string',
        'postback_error' => 'string',
        'postback_cname' => 'string',
        'postback_cid' => 'string',
        'postback_reversal_reason' => 'string',
        'postback_filter_duplicates' => 'string',
        'postback_signature' => 'string',
        'postback_signature_encryption' => 'string',
        'postback_signature_built' => 'string',
        'postback_url' => 'string',
        'postback_password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'enabled' => 'required',
        'enabled_postback' => 'required',
        'credit_wallet' => 'required',
        'credit_multiplier' => 'required',
        'order' => 'required',
        'payment_hold' => 'required',
        'payment_hold_over' => 'required',
        'ref_commissions' => 'required',
        'show_offerwalls' => 'required',
        'show_earn_passive' => 'required',
        'show_earn_surveys' => 'required',
        'show_earn_offerwalls' => 'required',
        'category' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function creditWallet()
    {
        return $this->belongsTo(\App\Models\Wallet::class, 'credit_wallet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function offersHistories()
    {
        return $this->hasMany(\App\Models\OffersHistory::class, 'network_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function offersLogs()
    {
        return $this->hasMany(\App\Models\OffersLog::class, 'network_id');
    }
}
