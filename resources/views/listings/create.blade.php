<x-layout>
    <div class="container">
        <div class="row p-3">
            <div class="user-form col-md-8 m-auto">
                <div class="w-100">
                    <h1 class="fs-6 fw-bold">Create a Gig</h1>
                </div>
                <form id="my-form" method="POST" action="/listings">
                    @csrf
                    {{-- <div class="msg"></div> --}}
                    <div>
                        <label class="form-label">Company Name :</label>
                        <input class="form-control" type="text" name="company" value="{{old('company')}}">
                        @error('company')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Job Title :</label>
                        <input class="form-control" placeholder="Example: Senior React Developer etc" type="text" name="title" value="{{old('title')}}">
                        @error('title')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Job Location :</label>
                        <input class="form-control" placeholder="Example: Remote, Boston MA etc" type="text" name="location" value="{{old('location')}}">
                        @error('location')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Contact Email :</label>
                        <input class="form-control" type="text" name="email" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Website/Application URL :</label>
                        <input class="form-control" type="text" name="website" value="{{old('website')}}">
                        @error('website')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Tags(Comma Separated) :</label>
                        <input class="form-control" placeholder="Example: Backend, Laravel etc" type="text" name="tags" value="{{old('tags')}}">
                        @error('tags')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- <div>
                        <label class="form-label">Company Logo :</label>
                        <input class="form-control" type="file" name="company-logo">
                    </div> --}}
                    <div>
                        <label class="form-label">Job Description :</label>
                        <textarea class="form-control" rows="3" placeholder="Include tasks, requirements, salary etc" type="text" name="description">{{old('description')}}</textarea>
                        @error('description')
                            <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input class="form-control btn btn-sm btn-dark" type="submit" value="Create Gig">
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>