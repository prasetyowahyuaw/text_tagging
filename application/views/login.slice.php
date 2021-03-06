@extends('master.layout')
@section('title','Login')
    
@section('body')
    <div class="row min-h-fullscreen center-v p-20 m-0">
      <div class="col-12">
        <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
          <h5 class="text-uppercase text-center">Sign in</h5>
          <br>

          <form class="" action="{{url('Login/verifyLogin')}}" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
              
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              
            </div>

            <div class="form-group">
              <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
            </div>
          </form>
        </div>
        <!-- <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a class="text-primary fw-500" href="{{url('signup')}}">Sign up</a></p>    -->     
      </div>
    </div>
@endsection