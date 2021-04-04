<a class="icon-swap" href={{ $item->url }} target="_blank">
  <img class="person-icon icon-visible" src={{ URL::asset('images/icon_'.$item->type.'.svg') }} />
  <img class="person-icon icon-hidden" src={{ URL::asset('images/icon_'.$item->type.'_color.svg') }} />
</a>
