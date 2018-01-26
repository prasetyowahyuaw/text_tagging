@extends('master.layout')
@section('title','Sign Up')
@section('body')
    <div class="row min-h-fullscreen center-vh p-20 m-0">
      <div class="col-12">
        <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
          <h5 class="text-uppercase">Create an account</h5>
          <br>

          <form class="form-type-material">
            <div class="form-group">
              <input type="text" class="form-control" id="username">
              <label for="username">Username</label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="email">
              <label for="email">Email address</label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="password">
              <label for="password">Password</label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="password-conf">
              <label for="password-conf">Password (confirm)</label>
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
          </form>
        </div>
        <p class="text-center text-muted fs-13 mt-20">Already have an account? <a class="text-primary fw-500" href="{{url('login')}}">Sign in</a></p>
      </div>
    </div>
@endsection