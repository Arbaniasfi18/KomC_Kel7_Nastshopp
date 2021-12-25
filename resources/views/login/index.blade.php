@extends('register.main')

@section('section')

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Login</p>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif@extends('register.main')

@section('title')
    Login
@endsection

@section('section')
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                  @if (session()->has('notVerified'))
                    <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4">Verify Email</p>
                  @else
                    <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4">Login</p>
                  @endif
                    
                    <p class="text-center mb-5"><a href="/" class="text-decoration-none" style="color: #F9A826;"><i class="bi bi-chevron-double-left"></i></i> Back to homepage</a></p>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
               
                @if (session()->has('notVerified'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('notVerified') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if (session()->has('verSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('verSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if (session()->has('changesucces'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('changesucces') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('logout'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('logout') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                  @if (session()->has('notVerified'))
                  
                      <form action="/verify-email" method="post">
                          @csrf
                          <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email1" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          <input type="hidden" value="1" name="verif">
                          <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="passwordd" placeholder="Password" required>
                            <label for="passwordd">Password</label>
                          </div>
                            <input type="checkbox" id="shows" onclick="myFunction()">
                            <label for="shows">Show Password</label>
                            <br><br>

                          <button class="w-100 btn btn-lg btn-light" style="background-color: #F9A826;" type="submit">Verify Email</button>
                      </form>
                  @else
                  
                      <form action="/login" method="post">
                          @csrf
                          <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email2"  autofocus placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                          
                          <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="passwordd" placeholder="Password" required>
                            <label for="passwordd">Password</label>
                          </div>
                          <input type="checkbox" id="show" onclick="myFunction()">
                          <label for="show">Show Password</label>
                          <script>
                            function myFunction() {
                              var a = document.getElementById("show");
                              var x = document.getElementById("passwordd");
                              if (a.checked  == true) {
                                if (x.type === "password") {
                                  x.type = "text";
                                } else {
                                  x.type = "password";
                                }
                              }else {
                                x.type = "password";
                              }
                            }
                          </script>
                          <br>
                          <br>
                          <a href="/forget-password" class="text-decoration-none" style="color: #F9A826;">Forget Password</a>        
                          <br>          
                          <br>          

                          <button class="w-100 btn btn-lg btn-light" style="background-color: #F9A826;" type="submit">Login</button>
                      </form>

                  @endif
                        <smal class="d-block text-center mt-3">Not registered?<a href="/register" class="text-decoration-none" style="color: #F9A826;">Register Now!</a></small>                  
               
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="{{ asset('icon/undraw_two_factor_authentication_namy.svg') }}" class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
@endsection
            
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('logout'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('logout') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                    
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email3" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                          <label for="email">Email address</label>
                          @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <br>
                        
                        <div class="form-floating">
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                          <label for="password">Password</label>
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                      </form>
                      <smal class="d-block text-center mt-3">Not registered?<a href="/register" class="text-decoration-none"> Register Now!</a></small>                  
                      <smal class="d-block text-center mt-3"><a href="/" class="text-decoration-none">Halaman Utama</a></small>                  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h1 id="hw">Heloo </h1>
                <button id="butn" onclick="hide()">Click</button>
  </section>  














@endsection