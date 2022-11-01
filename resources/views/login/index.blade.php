@extends('layouts.main') 

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                {{-- <img class="mb-4" src="/img/nabil.png" alt="" width="200" height="200"> --}}
            
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>

            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>

        </main>
    </div>
</div>

@endsection