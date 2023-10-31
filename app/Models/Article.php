<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //모델 파일 이름과 데이터 베이스 테이블 이름이 같아야 하는데
    //만약 다르게 하고싶으면 밑에같이 명시 해줘야함
    //protected $table = 'articles';


    // protected $fillable = [
    //     'user_id',
    //     'title',
    //     'content',
    // ];

    protected $fillable = ['title', 'content', 'region', 'user_id' , 'startDay', 'returnDay','numberPeople']; //화이트 리스트
    //protected $guarded = ['created_at', 'updated_at'];//블랙 리스트


    public function comments(){
        //return $this->hasMany(Comment::class, 'post_id', 'id');
        //자동으로 인식 하지만 인식 못하면 직접 입력 = 'post_id', 'id'
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
