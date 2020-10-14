<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;

    public function posts(){
    	return $this->belongsToMany(post::class , 'pivot' , 'tag_id','post_id');
    }
    
}
