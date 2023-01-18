@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="list-group list-group-horizontal flex-wrap">
    @foreach($tags as $tag)
        <li class="list-group"><a href="/?tag={{$tag}}">{{ $tag }}</a></li>
    @endforeach
</ul>