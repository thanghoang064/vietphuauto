<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const TYPE_PRODUCT = 1;
    const TYPE_POST    = 2;

    const TYPE_USER = 0;
    const TYPE_ADMIN = 1;

    protected $table = 'comments';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'com_user_id');
    }

    public function subComments()
    {
        return $this->hasMany(self::class, 'com_parent_id');
    }
}
