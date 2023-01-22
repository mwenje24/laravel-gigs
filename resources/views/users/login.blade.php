<x-layout>
    <section class="p-4" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-sm-12 col-lg-8 col-md-8 col-xl-4">
              <div class="card text-black" style="border-radius: 10px;">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-12 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-3 mt-3">Login</p>
      
                      <form class="mx-0 mx-md-0" action="/users/login" method="POST">
                        @csrf
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}"/>   
                            @error('email')
                                <p class="text-danger mt-1">{{$message}}</p>
                            @enderror                         
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password')}}"/>  
                            @error('password')
                                <p class="text-danger mt-1">{{$message}}</p>
                            @enderror                          
                          </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-4">
                            <p>Dont have an account <a class="link" href="/register">Register</a></p>
                          </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-secondary btn-lg">Login</button>
                        </div>
      
                      </form>
      
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-layout>