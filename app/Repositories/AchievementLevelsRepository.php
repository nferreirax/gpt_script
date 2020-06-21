<?php

namespace App\Repositories;

use App\Models\AchievementLevels;
use App\Repositories\BaseRepository;

/**
 * Class AchievementLevelsRepository
 * @package App\Repositories
 * @version June 21, 2020, 10:00 pm UTC
*/

class AchievementLevelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'badge',
        'min_offers',
        'min_points',
        'bonus_fixed',
        'bonus_percentage',
        'bonus_next_month',
        'level'
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
        return AchievementLevels::class;
    }
}
