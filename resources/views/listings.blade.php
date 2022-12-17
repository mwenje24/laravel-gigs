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
    @foreach($listing as $listing)
        <h4>{{$listing['id']; }}</h4>
        <p>{{$listing['name']; }}</p>
        <p>{{$listing['description']; }}</p>
        <p>{{$listing['location']; }}</p>
    @endforeach

</body>
</html>