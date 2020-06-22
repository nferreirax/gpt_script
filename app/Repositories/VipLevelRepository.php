<?php

namespace App\Repositories;

use App\Models\VipLevel;
use App\Repositories\BaseRepository;

/**
 * Class VipLevelRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:22 pm UTC
*/

class VipLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'privmessage',
        'auto_min_reg_time',
        'auto_points_hold_over',
        'auto_points_hold_days',
        'auto_min_earnings',
        'auto_max_earnings',
        'min_cashout',
        'badge',
        'avatar',
        'level',
        'ref_commissions',
        'store_pp_max_24',
        'store_coupons_max_24',
        'enabled'
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
        return VipLevel::class;
    }
}
