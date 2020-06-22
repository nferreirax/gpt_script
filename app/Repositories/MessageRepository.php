<?php

namespace App\Repositories;

use App\Models\Message;
use App\Repositories\BaseRepository;

/**
 * Class MessageRepository
 * @package App\Repositories
 * @version June 22, 2020, 6:12 pm UTC
*/

class MessageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sender_id',
        'receiver_id',
        'related_message',
        'name',
        'email',
        'ip',
        'subject',
        'message',
        'read',
        'read_date',
        'deleted_inbox',
        'deleted_sent',
        'is_support',
        'is_answer',
        'is_archived'
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
        return Message::class;
    }
}
