<?php

namespace App\Repositories;

use App\Models\CreditDebit;
use App\Repositories\BaseRepository;

/**
 * Class CreditDebitRepository
 * @package App\Repositories
 * @version June 21, 2020, 10:08 pm UTC
*/

class CreditDebitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'points',
        'type',
        'related_id'
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
        return CreditDebit::class;
    }
}
