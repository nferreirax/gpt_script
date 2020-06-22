<?php

namespace App\Repositories;

use App\Models\StoreProducts;
use App\Repositories\BaseRepository;

/**
 * Class StoreProductsRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:19 pm UTC
*/

class StoreProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'price',
        'price_discount',
        'price_discount_reason',
        'value',
        'cat_id',
        'notify_admin',
        'asset',
        'image_path',
        'qtd_available',
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
        return StoreProducts::class;
    }
}
