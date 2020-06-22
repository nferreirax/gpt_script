<?php

namespace App\Repositories;

use App\Models\StoreCategory;
use App\Repositories\BaseRepository;

/**
 * Class StoreCategoryRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:15 pm UTC
*/

class StoreCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'order',
        'img',
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
        return StoreCategory::class;
    }
}
