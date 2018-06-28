<?php

namespace App\Http\Controllers;

use App\Interval;
use App\Offer;
use App\OfferInterval;
use Illuminate\Http\Request;

class OfferController extends Controller
{
  public function index() {
    $offers = Offer::all();
    return view('offers.index', compact('offers'));
  }

  public function show(Offer $offer) {

    return view('offers.show', compact('offer'));
  }

  public function create() {
    return view('offers.create');
  }

  public function save() {

    $interval = new Interval();
    $interval->fill([
        'start' => request('start'),
        'end' => request('end')
    ]);
    $interval->save();

    $offer = new Offer();
    $offer->fill([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => 1
    ]);
    $offer->save();

    $offerInterval = new OfferInterval();
    $offerInterval->fill([
        'offer_id' => $offer->id,
        'interval_id' => $interval->id
    ]);
    $offerInterval->save();

    return redirect('/offers');
  }
}
