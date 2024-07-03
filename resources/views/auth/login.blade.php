@extends('layouts.layout-auth')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-4 col-md-5">
        <div class="card">
            <div class="card-body p-4">

                <div class="text-center w-75 mx-auto auth-logo mb-4">
                    <a class='logo-dark' href='index.html'>
                        <span><img src="assets/images/logo-dark-2.png" alt="" height="22"></span>
                    </a>

                    <a class='logo-light' href='index.html'>
                        <span><img src="assets/images/logo-light-2.png" alt="" height="22"></span>
                    </a>
                </div>

<form action="{{ route('login') }}" method="POST">
    @csrf
    
    <div class="form-group mb-3">
        <label class="form-label" for="username">Email ou nom d'utilisateur</label>
        <input class="form-control" type="text" name="username" id="username" required placeholder="Email ou nom d'utilisateur">
    </div>

    <div class="form-group mb-3">
        <a class='text-muted float-end' href='pages-recoverpw.html'><small></small></a>
        <label class="form-label" for="mot_de_passe">Password</label>
        <input class="form-control" type="password" name="mot_de_passe" required id="mot_de_passe" placeholder="Enter your password">
    </div>

    <div class="form-group mb-0 text-center">
        <button class="btn btn-estiam w-100" type="submit">  Se connecter</button>
    </div>

    @if($errors->has('login'))
        <div class="alert alert-danger mt-3">
            {{ $errors->first('login') }}
        </div>
    @endif
</form>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        {{-- <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-white-50"> <a class='text-white-50 ms-1' href='pages-register.html'>Forgot your password?</a></p>
                <p class="text-white-50">Don't have an account? <a class='text-white font-weight-medium ms-1' href='pages-register.html'>Sign Up</a></p>
            </div> <!-- end col -->
        </div> --}}
        <!-- end row -->

    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection