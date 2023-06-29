<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //登録/更新を許可
protected $fillable = [
    comment
      ];
    
    //リレーションの親子関係
    public function user(){
    return $this->belongsTo(User::class);
}

}