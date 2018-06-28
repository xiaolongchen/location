<?php

namespace App;

class Offer extends Model
{
  public function offerIntervals() {
    return $this->hasMany(OfferInterval::class);
  }
}
