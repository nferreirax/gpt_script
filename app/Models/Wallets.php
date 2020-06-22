<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Wallets
 * @package App\Models
 * @version June 22, 2020, 6:22 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $offerwallNetworks
 * @property \Illuminate\Database\Eloquent\Collection $usersWallets
 * @property string $name
 * @property string $symbol
 * @property string $sufix
 * @property string $prefix
 * @property boolean $sort
 * @property boolean $allow_deposits
 * @property boolean $active
 */
class Wallets extends Model
{
    use SoftDeletes;

    public $table = 'wallets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'symbol',
        'sufix',
        'prefix',
        'sort',
        'allow_deposits',
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
        'symbol' => 'string',
        'sufix' => 'string',
        'prefix' => 'string',
        'sort' => 'boolean',
        'allow_deposits' => 'boolean',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'sort' => 'required',
        'allow_deposits' => 'required',
        'active' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function offerwallNetworks()
    {
        return $this->hasMany(\App\Models\OfferwallNetwork::class, 'credit_wallet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usersWallets()
    {
        return $this->hasMany(\App\Models\UsersWallet::class, 'wallet_id');
    }
}
