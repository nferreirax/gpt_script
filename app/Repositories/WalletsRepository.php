<?php

namespace App\Repositories;

use App\Models\Wallets;
use App\Repositories\BaseRepository;

/**
 * Class WalletsRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:22 pm UTC
*/

class WalletsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'symbol',
        'sufix',
        'prefix',
        'sort',
        'allow_deposits',
        'active'
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
        return Wallets::class;
    }
}
