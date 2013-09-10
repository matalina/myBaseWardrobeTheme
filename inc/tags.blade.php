<ul class="tags">
  @foreach ($post->tags as $item)
    @if ($item->tag != "")
      <li><i class="icon-tag"></i> <a href="{{ wardrobe_url('/tag/'.$item->tag) }}">{{ $item->tag }}</a></li>
    @endif
  @endforeach
</ul>
