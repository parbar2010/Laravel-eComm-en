@extends('master')
@section('content')
 
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form action="login" method="POST" action="login" methode="POST" class="p-4 p-md-5 border rounded-3 bg-light" >
          @csrf
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                  <label><input type="checkbox" value="remember-me"> Remember me</label>
                </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <hr class="my-4">
              <small class="text-muted">By clicking Sign In, you can login to the page.</small>
            </form>
          </div>
      </div>
  </div>
@endsection