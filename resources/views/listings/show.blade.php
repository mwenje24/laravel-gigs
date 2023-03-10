<x-layout>

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $listing->logo ? asset('storage/'.$listing->logo) : asset('images/Im7lZjxeLhg.jpg')}}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">Status</div>
                <h3 class="display-6 fw-bolder">{{ $listing->title; }}</h3>
                <h6 class="lead fs-6 fw-normal">Stack :<x-listingtags :tagsCsv="$listing->tags" /></h6>          
                <p class="lead fs-6">{{ $listing->description; }}</p>
                <div class="fs-6 mb-5">
                    <span class="">Location : {{ $listing->location; }}</span>
                </div>
                <div class="d-flex flex-wrap">
                    <a class="btn btn-sm btn-outline-dark flex-shrink-0 mx-2 mb-2" type="button" href="{{ $listing->website }}">Visit Website</a>
                    <a class="btn btn-sm btn-outline-dark flex-shrink-0 mx-2 mb-2" type="button" href="mailto:{{ $listing->email }}">Mail Employer</a>
                    {{-- <a class="btn btn-sm btn-outline-dark flex-shrink-0 mx-2 mb-2" type="button" href="/listings/{{$listing->id}}/edit">Edit Job</a>
                    <form method="POST" action="/listings/{{$listing->id}}" class="mx-2 mb-2">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete"/>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</section>

</x-layout>