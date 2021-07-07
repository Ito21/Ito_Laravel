<?php

namespace App;

//use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /**
    * Post一覧を表示する
    * 
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
    ];
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで好順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
