<?php

namespace App\Repositories;

use App\Models\offersLog;
use App\Repositories\BaseRepository;

/**
 * Class offersLogRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:13 pm UTC
*/

class offersLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'network_id',
        'network_type',
        'transaction_id',
        'user_id',
        'offer_id',
        'message',
        'ip',
        'full_call'
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
        return offersLog::class;
    }
}
