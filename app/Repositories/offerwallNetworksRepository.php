<?php

namespace App\Repositories;

use App\Models\offerwallNetworks;
use App\Repositories\BaseRepository;

/**
 * Class offerwallNetworksRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:14 pm UTC
*/

class offerwallNetworksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enabled',
        'enabled_postback',
        'name',
        'url',
        'logo_image',
        'iframe_id',
        'iframe_key',
        'iframe_url',
        'postback_ips',
        'credit_wallet',
        'credit_multiplier',
        'order',
        'payment_hold',
        'payment_hold_over',
        'ref_commissions',
        'show_offerwalls',
        'show_earn_passive',
        'show_earn_surveys',
        'show_earn_offerwalls',
        'category',
        'postback_method',
        'postback_tid',
        'postback_rate',
        'postback_subid',
        'postback_status',
        'postback_value_reverse',
        'postback_value_credit',
        'postback_success',
        'postback_error',
        'postback_cname',
        'postback_cid',
        'postback_reversal_reason',
        'postback_filter_duplicates',
        'postback_signature',
        'postback_signature_encryption',
        'postback_signature_built',
        'postback_url',
        'postback_password'
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
        return offerwallNetworks::class;
    }
}
