@extends('layout')

@section('content')

<h4>{{$listing['id']; }}</h4>
<p>{{$listing['title']; }}</p>
<p>{{$listing['description']; }}</p>
<p>{{$listing['location']; }}</p>

@endsection