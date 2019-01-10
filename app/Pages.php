<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    public static function allpages(){
        return static::where('id','!=','0')->get();
    }

    public static function author_pages($id){
        return static::where('author_id',$id)->get();
    }

    public static function getPageFromID($id){
        return static::where('id',$id)->get();
    }
}
