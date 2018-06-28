<?php

namespace App;

class OfferInterval extends Model
{
    public function offer() {
      return $this->belongsTo(Offer::class);
    }
    
    public function interval() {
      return $this->belongsTo(Interval::class);
    }
}
