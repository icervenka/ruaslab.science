<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FundingController extends Controller
{
  public function show() {
    $fa = Storage::disk('local')->get('funding_agencies.json');
    $fa = json_decode($fa, false);
    return view('funding', [
      "funding_agencies"=>$fa->agencies
    ]);
  }

}
