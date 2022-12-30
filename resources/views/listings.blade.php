<!DOCTYPE html>
<html lang="en">
    @extends('layout')

    @section('content')

    <h3>{{$heading; }}</h3><br>
    <div class='lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4'>
    @if(count($listing) == 0)
    <p>No gigs to list</p>
    @endif

    @foreach($listing as $listing)
        {{-- <h4>{{$listing['id']; }}</h4> --}}
        <a href="/listings/{{$listing['id']}}">{{$listing['title']; }}</a>
        <p>{{$listing['description']; }}</p>
        <p>{{$listing['location']; }}</p>
    @endforeach
    </div>
    @endsection