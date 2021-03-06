<figure>
  <h4 class="figure-title">
    <a href="{{ url('user/'.$picture->user->id) }}">
        {{ $picture->user->name }}
    </a> posted:
    <a href="{{ url('picture/'.$picture->id) }}">
        {{ $picture->description }}
    </a>
  </h4>
  <small>{{ $picture->created_at->diffForHumans() }}</small><br />
  <img src="{{ asset($picture->url) }}" style="height:100%;width:100%;" alt="{{ $picture->description }}">
  <figcaption>{{ $picture->description }}</figcaption>
</figure>