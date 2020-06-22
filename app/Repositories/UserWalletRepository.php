<?php

namespace App\Repositories;

use App\Models\UserWallet;
use App\Repositories\BaseRepository;

/**
 * Class UserWalletRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:21 pm UTC
*/

class UserWalletRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'wallet_id',
        'amount'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserWallet::class;
    }
}
