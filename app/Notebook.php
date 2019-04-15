<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function search($data){
        $notebook =auth()->user()->notebooks()->orderBy('id' , 'DESC');

        if (sizeof($data)>0){
            if (array_key_exists('search',$data)){
                $notebook= $notebook->where('title', 'like','%'.$data['search'].'%');
            }
        }
        $notebook = $notebook->paginate(10);
        return $notebook;
    }
}
