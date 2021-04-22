<a href={{ URL::asset('images/gallery/'.$item->image) }} data-sub-html={!! $item->caption !!}>
  <img src={{ URL::asset('images/gallery/'.$item->thumbnail) }} alt={{ $item->title }} >
</a>
