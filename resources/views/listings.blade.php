


<!DOCTYPE html>
<html lang="en">
    @extends('layout')

    @section('content')

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">LaraGigs</h1>
                <p class="lead fw-normal text-white-50 mb-0">Find or post Laravel jobs and projects</p>
            </div>
        </div>
    </header>

    <!-- Navbar Search-->
    <div class="container p-4">
        <form class="d-none d-md-inline-block form-inline w-100">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for jobs..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-secondary" id="btnNavbarSearch" type="button">search</button>
            </div>
        </form>
    </div>
        

    <h5 class="fw-bolder mt-4 text-center">{{$heading; }}</h5><br>
    <div class='lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4'>
    @if(count($listing) == 0)
    <p>No gigs to list</p>
    @endif
    <div class="row">
    @foreach($listing as $listing)
        <div class="col-3 mb-3">
            <div class="card h-100">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">available</div>
                <img class="card-img-top" src="{{ asset('images/Im7lZjxeLhg.jpg') }}" alt="..." />
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">{{$listing['title']; }}</h5>
                        <span class="text-muted">{{$listing['tags']; }}</span><br>
                        <span class="text-muted">Location: {{$listing['location']; }}</span>
                    </div>
                </div>
                <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/listings/{{$listing['id']}}">View</a></div>
                </div>
            </div>
        </div>        
    @endforeach
    </div>
    </div>
    @endsection