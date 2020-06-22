<?php

namespace App\Repositories;

use App\Models\UsersLoginLog;
use App\Repositories\BaseRepository;

/**
 * Class UsersLoginLogRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:21 pm UTC
*/

class UsersLoginLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'username',
        'password',
        'ip',
        'client',
        'os',
        'device',
        'brand',
        'model',
        'status'
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
        return UsersLoginLog::class;
    }
}
