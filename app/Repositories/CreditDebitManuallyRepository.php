<?php

namespace App\Repositories;

use App\Models\CreditDebitManually;
use App\Repositories\BaseRepository;

/**
 * Class CreditDebitManuallyRepository
 * @package App\Repositories
 * @version June 21, 2020, 10:09 pm UTC
*/

class CreditDebitManuallyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'amount',
        'description',
        'admin_notes'
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
        return CreditDebitManually::class;
    }
}
