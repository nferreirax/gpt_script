<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version June 16, 2020, 11:11 am UTC
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
        'username',
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
        'username' => 'string',
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

     /**
     * stats for admin panel
     */
    public static function countTotalMembers()
    {
        return self::count();
    }
    public static function countTotalMembersToday()
    {
        return self::whereDate('created_at', Carbon::today())->count();
    }

    public static function sumTotalMembersBalances()
    {
        return UserWallet::where('wallet_id', '!=', 1)->sum('amount');
    }

    public static function sumTotalMembersPoints()
    {
        return UserWallet::where('wallet_id', 1)->sum('amount');
    }
    /** 
     * stats for admin panel end
     */

    public function getUserWallet($wallet_id)
    {
        if($this->wallets) {
            foreach ($this->wallets as $user_wallet) {
                if ($user_wallet->wallet_id == $wallet_id) {
                    return $user_wallet ?? 0;
                }
            }
        }
        
        //if get here means user haven't wallet, create one
        $user_wallet = UserWallet::create([
            'user_id' => $this->id,
            'wallet_id' => $wallet_id,
            'amount' => 0
        ]);
        return $user_wallet;
    }

      /**
     * $amount
     * $wallet_id
     * $type
     * $realated_id
     */
    public function deductBalance($amount, $wallet_id, $type, $related_id)
    {
        $user_wallet = $this->getUserWallet($wallet_id);
        if ($user_wallet->amount >= $amount) {
            //deduct balance
            $user_wallet->amount -= $amount;
            $user_wallet->save();

            //save credit/debit log
            $log = new CreditDebit();
            $log->user_id = $this->id;
            $log->amount = $amount;
            $log->type = $type;
            $log->related_id = $related_id;
            $log->wallet_id = $wallet_id;
            $log->status = 1;
            $log->save();
          
            return true;
        } else {
            return false;
        }
    }

   

    public function addBalance($amount, $wallet_id, $type, $related_id)
    {

        $user_wallet = $this->getUserWallet($wallet_id);
        //deduct balance
        $user_wallet->amount += $amount;
        $user_wallet->save();

        //save credit/debit log
        $log = new CreditDebit();
        $log->user_id = $this->id;
        $log->amount = $amount;
        $log->type = $type;
        $log->related_id = $related_id;
        $log->wallet_id = $wallet_id;
        $log->status = 1;
        $log->save();
      
        return true;
    }

}
