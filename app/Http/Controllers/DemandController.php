<?php

namespace App\Http\Controllers;

use App\Demand;
use App\DemandInterval;
use App\Interval;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class DemandController extends Controller
{
  public function index() {
    $demands = Demand::all();
    return view('demands.index', compact('demands'));
  }

  public function show(Demand $demand) {
    
    return view('demands.show', compact('demand'));
  }

  public function create() {
    return view('demands.create');
  }
  
  public function save() {
    
    $interval = new Interval();
    $interval->fill([
        'start' => request('start'),
        'end' => request('end')
    ]);
    $interval->save();
    
    $demand = new Demand();
    $demand->fill([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => 1
    ]);
    $demand->save();
    
    $demandInterval = new DemandInterval();
    $demandInterval->fill([
        'demand_id' => $demand->id,
        'interval_id' => $interval->id
    ]);
    $demandInterval->save();
    
    return redirect('/demands');
  }
}
