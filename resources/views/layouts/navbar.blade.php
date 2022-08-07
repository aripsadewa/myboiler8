<ul class="navbar">
    @foreach ($navbar as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a>
    @endforeach
</ul>
