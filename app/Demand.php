<?php

namespace App;

class Demand extends Model
{
    public function demandIntervals() {
      return $this->hasMany(DemandInterval::class);
    }
    
    public function user() {
      return $this->belongsTo((User::class));
    }
}
