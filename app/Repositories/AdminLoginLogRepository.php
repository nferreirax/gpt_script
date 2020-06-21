<?php

namespace App\Repositories;

use App\Models\AdminLoginLog;
use App\Repositories\BaseRepository;

/**
 * Class AdminLoginLogRepository
 * @package App\Repositories
 * @version June 21, 2020, 10:05 pm UTC
*/

class AdminLoginLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'admin_id',
        'username',
        'ip',
        'pass',
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
        return AdminLoginLog::class;
    }
}
