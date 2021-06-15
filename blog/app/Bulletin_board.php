<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin_board extends Model
{
    
    protected $fillable = [
        'title',
        'comment',
        'user_id',
        'type',
        'reply_number',
    ];
    
	public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function bb_replys() {
        return $this->hasMany('App\Bb_reply');
    }

}
