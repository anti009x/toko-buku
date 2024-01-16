@extends('layout.layout')

@section ('template')
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6 shadow p-3 bg-white rounded mb-md-3 mb-sm-4 mb-2 mt-2">
            <img
            src="/asset/img/welcome.jpg"
            class="img-fluid"
            alt="welcome"
            
          />
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            {{-- {/* Email input */} --}}
            <div class="form-outline mb-4">
              <input
                type="email"
                name="email"
                id="form1Example13"
                class="form-control form-control-lg"
                required
              />
              <label class="form-label" htmlFor="form1Example13">
                Email address
              </label>
          </div>
          <div class="form-outline mb-4">
              <input
                type="password"
                name="password"
                id="form1Example23"
                class="form-control form-control-lg"
                required
              />
              <label class="form-label" htmlFor="form1Example23">
                Password
              </label>
          </div>
            <div class="d-flex justify-content-around align-items-center mb-4">
              {{-- {/* Checkbox */} --}}
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  defaultValue=""
                  id="form1Example3"
                  defaultChecked=""
                />
                <label class="form-check-label" htmlFor="form1Example3">
                  Remember me
                </label>
              </div>
              <a href="#!">Forgot password?</a>
            </div>
            {{-- {/* Submit button */} --}}
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Sign in
            </button>
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-dark" >OR</p>
            </div>
  
            <div
                   class="btn btn-primary btn-lg btn-block mt-2"
                   style="background-color: black"
                   role="button"
            >
              Continue with Email
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection