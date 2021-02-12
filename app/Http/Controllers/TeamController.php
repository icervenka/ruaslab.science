<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class TeamController extends Controller
{
  /**
  * Show the team webpage.
  *
  * @return \Illuminate\View\View
  */
  public function team()
  {
    $team = DB::table('people')->get();
    return view('team', [
        'team' => $team
    ]);
  }

  /**
  * Show the profile for a given person.
  *
  * @param  string  $surname
  * @return \Illuminate\View\View
  */
  public function person($surname)
  {
    //$person_data = DB::table('people')->where('surname', '=', $surname)->first();
    $person_data = Person::where('surname', '=', $surname)->first();
    //$person_data = Person::find(1);
    return view('person', [
        'person_data' => $person_data
    ]);
  }


}

?>
