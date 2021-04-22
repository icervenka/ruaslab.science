<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollaboratorsController extends Controller
{
  /**
  * Show the collaborators webpage.
  *
  * @return \Illuminate\View\View
  */
  public function show()
  {
    $metabolic_network = Storage::disk('local')->get('metabolic_network.json');
    $metabolic_network = json_decode($metabolic_network, false);

    return view('collaborators',
      [
        "metabolic_network"=>$metabolic_network->members
      ]
    );
  }
}
