<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
    'title',
    'body',
    'category_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    //return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function category()
    {
    return $this->belongsTo('App\Category');
    }

}

/*paginate()がSQLを内部で実行してデータを取得してきている。paginate()だけがpostsに紐づいているわけではない。
このPost.phpというファイルは“posts”テーブルに紐づいている。
Laravelにはモデルとテーブル名に命名規則があり、テーブル名を複数形に、モデル名を紐付けたいテーブルの単数形にすることで、裏で自動的に紐づく。
*/