<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * @package App\Models
 * @version June 22, 2020, 6:12 pm UTC
 *
 * @property \App\Models\User $sender
 * @property \App\Models\User $receiver
 * @property integer $sender_id
 * @property integer $receiver_id
 * @property integer $related_message
 * @property string $name
 * @property string $email
 * @property string $ip
 * @property string $subject
 * @property string $message
 * @property boolean $read
 * @property string|\Carbon\Carbon $read_date
 * @property boolean $deleted_inbox
 * @property boolean $deleted_sent
 * @property boolean $is_support
 * @property boolean $is_answer
 * @property boolean $is_archived
 */
class Message extends Model
{
    use SoftDeletes;

    public $table = 'messages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sender_id' => 'integer',
        'receiver_id' => 'integer',
        'related_message' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'ip' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'read' => 'boolean',
        'read_date' => 'datetime',
        'deleted_inbox' => 'boolean',
        'deleted_sent' => 'boolean',
        'is_support' => 'boolean',
        'is_answer' => 'boolean',
        'is_archived' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip' => 'required',
        'message' => 'required',
        'read' => 'required',
        'deleted_inbox' => 'required',
        'deleted_sent' => 'required',
        'is_support' => 'required',
        'is_answer' => 'required',
        'is_archived' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sender()
    {
        return $this->belongsTo(\App\Models\User::class, 'sender_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function receiver()
    {
        return $this->belongsTo(\App\Models\User::class, 'receiver_id');
    }
}
