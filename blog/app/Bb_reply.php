<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bb_reply extends Model
{
    
    protected $fillable = [
        'bulletin_board_id',
        'comment',
        'user_id',
        'number',
    ];
    
	public function getPaginateByLimit(int $limit_count = 20)
    {
        return $this->orderBy('created_at', 'DESC')->paginate($limit_count);
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function bulletin_board() {
        return $this->belongsTo('App\Bulletin_board');
    }

}
