<div class="profile-badge shadow-sm" style="background-color: {{ $color }};">
  <a href={{ route('person', $person->surname) }}>
    <div class="profile-img">
      <img src={{ URL::asset('images/thumb_'.$person->photo) }}>
    </div>
    <div class="profile-text text-white">
      <p>{{ $person->first_name }} <br>{{ $person->surname }}</p>
    </div>
  </a>
</div>
