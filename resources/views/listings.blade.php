<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gigs</title>
</head>
<body>
    <h3>{{$heading; }}</h3><br>
    @if(count($listing) == 0)
    <p>No gigs to list</p>
    @endif

    @foreach($listing as $listing)
        {{-- <h4>{{$listing['id']; }}</h4> --}}
        <a href="/listings/{{$listing['id']}}">{{$listing['title']; }}</a>
        <p>{{$listing['description']; }}</p>
        <p>{{$listing['location']; }}</p>
    @endforeach

</body>
</html>