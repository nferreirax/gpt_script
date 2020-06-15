<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version June 15, 2020, 6:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $achievementLogs
 * @property \Illuminate\Database\Eloquent\Collection $creditDebits
 * @property \Illuminate\Database\Eloquent\Collection $creditDebitManuallies
 * @property \Illuminate\Database\Eloquent\Collection $messages
 * @property \Illuminate\Database\Eloquent\Collection $message1s
 * @property \Illuminate\Database\Eloquent\Collection $offersHistories
 * @property \Illuminate\Database\Eloquent\Collection $offersLogs
 * @property \Illuminate\Database\Eloquent\Collection $storeOrders
 * @property \App\Models\UsersAchievement $usersAchievement
 * @property \Illuminate\Database\Eloquent\Collection $usersLoginLogs
 * @property \Illuminate\Database\Eloquent\Collection $usersWallets
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function achievementLogs()
    {
        return $this->hasMany(\App\Models\AchievementLog::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function creditDebits()
    {
        return $this->hasMany(\App\Models\CreditDebit::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function creditDebitManuallies()
    {
        return $this->hasMany(\App\Models\CreditDebitManually::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function messages()
    {
        return $this->hasMany(\App\Models\Message::class, 'sender_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function message1s()
    {
        return $this->hasMany(\App\Models\Message::class, 'receiver_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function offersHistories()
    {
        return $this->hasMany(\App\Models\OffersHistory::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function offersLogs()
    {
        return $this->hasMany(\App\Models\OffersLog::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function storeOrders()
    {
        return $this->hasMany(\App\Models\StoreOrder::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function usersAchievement()
    {
        return $this->hasOne(\App\Models\UsersAchievement::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usersLoginLogs()
    {
        return $this->hasMany(\App\Models\UsersLoginLog::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usersWallets()
    {
        return $this->hasMany(\App\Models\UsersWallet::class, 'user_id');
    }
}
