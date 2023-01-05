


<!DOCTYPE html>
<html lang="en">
    <x-layout>

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
        <form class="d-none d-md-inline-block form-inline w-100" action="/">
            <div class="input-group">
                <input class="form-control" name="search" type="text" placeholder="Search for jobs..." aria-label="Search for jobs..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-secondary" id="btnNavbarSearch" type="submit">search</button>
            </div>
        </form>
    </div>
        

    <h5 class="fw-bolder mt-4 text-center">Gigs Listings</h5><br>
    <div class='lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4'>
    @if(count($listing) == 0)
    <p>No gigs to list</p>
    @endif
    <div class="row">
    @foreach($listing as $listing)
        <x-listingcard :listing="$listing" />
    @endforeach
    </div>
    </div>

</x-layout>