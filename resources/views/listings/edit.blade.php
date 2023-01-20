<x-layout>
    <div class="container">
        <div class="row p-3">
            <div class="user-form col-md-8 m-auto">
                <div class="w-100">
                    <h1 class="fs-6 fw-bold">Edit a Gig</h1>
                </div>
                <form id="my-form" method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="msg"></div> --}}
                    <div>
                        <label class="form-label">Company Name :</label>
                        <input class="form-control" type="text" name="company" value="{{$listing->company}}">
                        @error('company')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Job Title :</label>
                        <input class="form-control" placeholder="Example: Senior React Developer etc" type="text" name="title" value="{{$listing->title}}">
                        @error('title')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Job Location :</label>
                        <input class="form-control" placeholder="Example: Remote, Boston MA etc" type="text" name="location" value="{{$listing->location}}">
                        @error('location')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Contact Email :</label>
                        <input class="form-control" type="text" name="email" value="{{$listing->email}}">
                        @error('email')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Website/Application URL :</label>
                        <input class="form-control" type="text" name="website" value="{{$listing->website}}">
                        @error('website')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Tags(Comma Separated) :</label>
                        <input class="form-control" placeholder="Example: Backend, Laravel etc" type="text" name="tags" value="{{$listing->tags}}">
                        @error('tags')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Company Logo :</label>
                        <div class="row">
                            <div class="col-2">
                                <img class="card-img-top" src="{{ $listing->logo ? asset('storage/'.$listing->logo) : asset('images/Im7lZjxeLhg.jpg')}}" alt="..." />
                            </div>
                            <div class="col-10">
                                <input class="form-control" type="file" name="logo">
                            </div>
                            
                        </div>
                        @error('logo')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Job Description :</label>
                        <textarea class="form-control" rows="3" placeholder="Include tasks, requirements, salary etc" type="text" name="description">{{$listing->description}}</textarea>
                        @error('description')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input class="form-control btn btn-sm btn-warning" type="submit" value="Update Gig">
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>