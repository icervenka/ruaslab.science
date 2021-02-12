<div class="col-12 px-0">
  <a href={{ route('project', $project->layman_title) }}>
    <div class="d-flex flex-row person-pub m-1 align-middle">
      <div class="p-1">
        <div class="person-pub-img h-100" style="background-image:url({{ URL::asset('images/paper5.jpg') }})"></div>
      </div>
      <div class="pl-1 pr-2">
        <div>{{ $project->layman_title }}</div>
        <div class="text-muted hide-in-small">
          @if($project->completion == 100)
            {{ $project->bibliography  }}%
          @else
            Completion: {{ $project->completion  }}%
          @endif
        </div>
      </div>
    </div>
  </a>
</div>
