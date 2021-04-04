<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class ResultController extends Controller
{
  /**
  * Show the webpage for selected tag.
  *
  * @return \Illuminate\View\View
  */
  public function show($tag) {

    // TODO maybe order by something
    $projects = Tag::where('name', '=', $tag)->first()->projects()->get();
    return view('results', [
      'projects' => $projects,
      'tag' => $tag
    ]);
  }
}
