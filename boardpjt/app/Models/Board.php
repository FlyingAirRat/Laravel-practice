<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    //protected $table = '바꾸고 싶은 테이블 이름';
    //protected $primary key = 'i_board';
    protected $fillable = ['title', 'ctnt', 'hits'];
    //윗줄 없으면 insert 안된다나.
    protected $guarded = ['created_at'];
    //const스러운 데이터들을 적자. 엘로퀀트 한정이라 db에서 직접 수정가능
}
