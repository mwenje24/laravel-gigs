<x-layout>

    <section class="p-4" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-3 mt-3">Sign up</p>
      
                      <form class="mx-1 mx-md-3" action="/users" method="POST">
                        @csrf
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}"/> 
                            @error('name')
                                <p class="text-danger mt-1">{{$message}}</p>
                            @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Your Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}"/>   
                            @error('email')
                                <p class="text-danger mt-1">{{$message}}</p>
                            @enderror                         
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password')}}"/>  
                            @error('password')
                                <p class="text-danger mt-1">{{$message}}</p>
                            @enderror                          
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Repeat your password</label>
                            <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}"/>  
                            @error('password_confirmation')
                                <p class="text-danger mt-1">{{$message}}</p>
                            @enderror                          
                          </div>
                        </div>
      
                        {{-- <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div> --}}
                        <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-4">
                            <p>Already Have an Account? <a class="link" href="/login">Login</a></p>
                          </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-secondary btn-lg">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">      
                      <img src="{{asset('images/jobsearch.jpg')}}" class="img-fluid" alt="job search">      
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</x-layout>