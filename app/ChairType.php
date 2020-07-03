<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChairType extends Model
{
    public function chairs()
    {
        return $this-hasMany(Chairs::class);
    } 

    // public function setDpAttribute($dp){
    //     if($dp !== null & $dp !== "" ) {
    //         ini_set('memory_limit', '256M');
    //         $png_url = "user-dp-".time().".jpg";
    //         $path = public_path().'/images/user/'.$png_url;
    //         Image::make(file_get_contents($dp))->save($path);
    //         $this->attributes['dp'] ='/images/user/'.$png_url;

    //         // $optimizerChain = OptimizerChainFactory::create();
    //         // $optimizerChain->optimize($path);
    //     }
    // }

    public function getImageAttribute(): string
    {
        $dp = $this->attributes['image'];
        if($dp !== null & $dp !== "" ) {
            return url('/uploads/chair_type/')."/".$dp;
        }else{
            return '';
        }
        return '';
    }
}
