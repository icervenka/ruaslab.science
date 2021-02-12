<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
  /**
  * Show the index webpage.
  *
  * @return \Illuminate\View\View
  */
  public function show()
  {
    $metabolic_network = Storage::disk('local')->get('metabolic_network.json');
    $metabolic_network = json_decode($metabolic_network, false);

    $mission_cards = Storage::disk('local')->get('mission_cards.json');
    $mission_cards = json_decode($mission_cards, false);

    $paper_carousel = Storage::disk('local')->get('paper_carousel.json');
    $paper_carousel = json_decode($paper_carousel, false);

    return view('index',
      [
        "metabolic_network"=>$metabolic_network->members,
        "mission_cards"=>$mission_cards->cards,
        "paper_carousel"=>$paper_carousel->papers
      ]
    );
  }
}
