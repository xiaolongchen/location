<?php

namespace App;

class Interval extends Model
{
  public function demandIntervals() {
    return $this->hasMany(DemandInterval::class);
  }
  public function offerIntervals() {
    return $this->hasMany(OfferInterval::class);
  }
}
