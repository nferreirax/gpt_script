<?php

namespace App\Repositories;

use App\Models\StoreOrders;
use App\Repositories\BaseRepository;

/**
 * Class StoreOrdersRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:18 pm UTC
*/

class StoreOrdersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'product_id',
        'card_id',
        'price',
        'value',
        'ip',
        'status',
        'date_processed'
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
        return StoreOrders::class;
    }
}
