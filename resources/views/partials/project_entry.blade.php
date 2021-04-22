<div class="row no-gutters py-3">
  <div class="col-lg-2 col-md-2 col-sm-12 text-center px-md-2">
    @if($project->completion == 100)
    <div class="py-2 text-white rounded publication-date">
      <span>{{ $project->pubdate_month }} <span class="line-break">{{ $project->pubdate_year }}</span></span>
    </div>
    @else
    <a href={{ route('person', $project->author_surname) }}>
      <div class="py-2 text-white rounded project-lead">
        <span>
          {{ $project->author }}
        </span>
      </div>
    </a>
    @endif
  </div>
  <div class="publication col-lg-10 col-md-10 col-12">
    <div class="px-md-4 pt-3 py-md-0">
      <a href={{ route('project', $project->layman_title_slug) }}>
        <h4 class="px-0 px-md-2">
          {{ $project->layman_title }}
        </h4>
      </a>
      <div class="row no-gutters">

        <div class="flex col-lg-5 col-12 pt-3 px-0 px-md-2">
          <div class="publication-img rounded" style="background-image:url({{ URL::asset('images/thumb_'.$project->bg_image) }})" alt=""></div>
        </div>
        <div class="flex col-lg-7 col-12 text-justify">
          <div class="pt-3 px-0 px-md-2">
            @if($project->completion < 100)
            <div class="row no-gutters pb-3">
              <div class="col-10">
                <span class="skill-text">Progress</span>
                <div class="progress">
                  <div class="progress-bar bg-skill-progress-1" role="progressbar" style="width: {{ $project->completion }}%;" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-2 text-right skill-percentage">
                <span class="skill-text">{{ $project->completion }}%</span>
              </div>
            </div>
            @endif
            <p>{{ $project->layman_abstract_highlight }}</p>
            @if($project->completion == 100)
            <div class="col-12 px-0">
              <div class="row no-gutters">
                <div class="col-2">
                  <a href="https://plu.mx/plum/a/?doi={{ $project->doi }}" class="plumx-plum-print-popup plum-bigben-theme" data-size="medium" ></a>
                </div>
                <div class="col-10 pl-1">
                  <b>Original title</b>
                  <p><em>{{ $project->title }}</em></p>
                </div>

              </div>
            </div>
            @endif
            <div class="text-right">
              <a href="{{ route('project', $project->layman_title_slug) }}">
                <button type="button" class="btn rounded-pill btn-more justify-right">
                  <span>Read More </span>
                </button>
              </a>
            </div>

          </div>
        </div>
      </div>
      @include('partials.project_entry_footer', $project)
    </div>
  </div>
</div>
