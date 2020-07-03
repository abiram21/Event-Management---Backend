<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemorialType extends Model
{
    public function memorials()
    {
        return $this-hasMany(Memorials::class);
    } 


    public function getImageAttribute(): string
    {
        $dp = $this->attributes['image'];
        if($dp !== null & $dp !== "" ) {
            return url('/uploads/memorial_type/')."/".$dp;
        }else{
            return '';
        }
        return '';
    }
}
