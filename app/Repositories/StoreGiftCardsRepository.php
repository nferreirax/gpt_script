<?php

namespace App\Repositories;

use App\Models\StoreGiftCards;
use App\Repositories\BaseRepository;

/**
 * Class StoreGiftCardsRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:16 pm UTC
*/

class StoreGiftCardsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'product_id',
        'value',
        'link',
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
        return StoreGiftCards::class;
    }
}
