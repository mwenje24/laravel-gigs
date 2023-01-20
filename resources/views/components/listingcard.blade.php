@props(['listing'])

<div class="col mb-3">
    <div class="card h-100">
        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">available</div>
        <img class="card-img-top" src="{{ $listing->logo ? asset('storage/'.$listing->logo) : asset('images/Im7lZjxeLhg.jpg')}}" alt="..." />
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder">{{$listing->title; }}</h5>
                <x-listingtags :tagsCsv="$listing->tags" />
                <span class="text-muted">Location: {{$listing->location; }}</span>
            </div>
        </div>
        <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/listings/{{$listing->id}}">View</a></div>
        </div>
    </div>
</div> 