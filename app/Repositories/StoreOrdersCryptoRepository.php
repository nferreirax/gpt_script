<?php

namespace App\Repositories;

use App\Models\StoreOrdersCrypto;
use App\Repositories\BaseRepository;

/**
 * Class StoreOrdersCryptoRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:18 pm UTC
*/

class StoreOrdersCryptoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'crypto_value',
        'crypto_send',
        'coin'
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
        return StoreOrdersCrypto::class;
    }
}
