<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\User;

class Post extends Model
{
    //u can change table name

    protected $table='posts';

    //also u can change primary key 
    public $primarykey='id';

    //timestamps
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
