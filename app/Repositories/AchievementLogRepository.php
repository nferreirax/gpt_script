<?php

namespace App\Repositories;

use App\Models\AchievementLog;
use App\Repositories\BaseRepository;

/**
 * Class AchievementLogRepository
 * @package App\Repositories
 * @version June 21, 2020, 10:03 pm UTC
*/

class AchievementLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'level_id',
        'offers',
        'points',
        'bonus_credited'
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
        return AchievementLog::class;
    }
}
