<?php

namespace App\Repositories;

use App\Models\UsersAchievement;
use App\Repositories\BaseRepository;

/**
 * Class UsersAchievementRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:20 pm UTC
*/

class UsersAchievementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'offers',
        'offers_last_month',
        'points',
        'points_last_month'
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
        return UsersAchievement::class;
    }
}
