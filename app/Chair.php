<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    protected $fillable =['type','extension','range','price_per_coveredchair','price_per_uncoveredchair','fac_id','client_id'];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function chair_type()
    {
        return $this->belongsTo(ChairType::class);
    }
}
