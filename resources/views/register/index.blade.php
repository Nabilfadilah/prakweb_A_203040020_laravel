@extends('layouts.main') 

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                {{-- <img class="mb-4" src="/img/nabil.png" alt="" width="200" height="200"> --}}
            
            <div class="form-floating">
                <input type="text" class="form-control rounded-top" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>

            <div class="form-floating">
                <input type="username" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="name" placeholder="name@example.com">
                <label for="name">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

            </form>

            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login !</a></small>

        </main>
    </div>
</div>

@endsection