<?php

namespace App\Repositories;

use App\Models\offersHistory;
use App\Repositories\BaseRepository;

/**
 * Class offersHistoryRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:12 pm UTC
*/

class offersHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'network_id',
        'credits',
        'credit_type',
        'txd',
        'credited',
        'offer_id',
        'offer_name',
        'date_credited'
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
        return offersHistory::class;
    }
}
