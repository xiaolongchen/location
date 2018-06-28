<?php

namespace App;

class DemandInterval extends Model
{
  public function demand() {
    return $this->belongsTo(Demand::class);
  }

  public function interval() {
    return $this->belongsTo(Interval::class);
  }
}
