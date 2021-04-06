<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
    * Show the project overview webpage.
    *
    * @return \Illuminate\View\View
    */
    public function projects()
    {
      $projects = Project::where('completion', '<', 100)->get();
      return view('projects', [
        'projects' => $projects
      ]);
    }

    /**
    * Show the publication overview webpage.
    *
    * @return \Illuminate\View\View
    */
    public function publications()
    {
      // divide into from lab or collab
      $pubs = Project::where('completion', '=', 100);
      return view('publications', [
        'pubs_lab' => $pubs->where('is_from_lab', '=', 1)->orderBy('pubdate_year', 'DESC')->orderBy('pubdate_month_num', 'DESC')->get(),
        'pubs_collab' => $pubs->where('is_from_lab', '=', 0)->get(),
      ]);
    }

    public function project_details($title) {
      $project_details = Project::where('layman_title_slug', '=', $title)->first();
      $leads =  $project_details->leads()->get();
      $contribs = $project_details->contributors()->get();
      return view('project', [
        'project' => $project_details,
        'leads' => $leads,
        'contribs' => $contribs
      ]);
    }
}
