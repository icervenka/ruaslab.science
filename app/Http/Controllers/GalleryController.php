<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
  public function show() {
    $g = Storage::disk('local')->get('gallery.json');
    $g = json_decode($g, false);
    return view('gallery', [
      "gallery"=>$g->gallery
    ]);
  }

}
