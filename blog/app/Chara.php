<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chara extends Model
{
	public $timestamps = false;
	
	public function getPaginateByLimit(int $limit_count = 50)
    {
        return $this->orderBy('id')->paginate($limit_count);
    }
}
