@extends('layout')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('images/Im7lZjxeLhg.jpg') }}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">Status</div>
                <h3 class="display-6 fw-bolder">{{ $listing['title']; }}</h3>                
                <p class="lead fs-6">{{ $listing['description']; }}</p>
                <div class="fs-6 mb-5">
                    <span class="">Location : {{ $listing['location']; }}</span>
                </div>
                <div class="d-flex">
                    <button class="btn btn-sm btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection