@extends('layouts.layout-auth')

<style>
    @import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);

    .bg-estiam{
        background: #6a1b9a  !important;
    }

    .btn-estiam{
        background: #fff  !important;
        color: #6a1b9a !important;
    }

    h1, .btn-estiam {
        font-family: 'Poppins', sans-serif !important;
    }

    h1 {
        font-size: calc(2rem + 2vw) !important;
        color: #fff !important;
    }
</style>

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-4 col-md-5">
        <h1 class="fw-bold text-center">Virtu Doc</h1>
        <button id="createSession" class="btn btn-estiam w-100 mt-3 fw-bold text-uppercase" 
            onclick="window.location='{{ route('login_session_code') }}'"
        >
            Se connecter
        </button>

        <div class="mt-5 d-flex justify-content-between align-items-center">
            <a href="#" class="text-white text-decoration-underline">Première connexion</a>
            <a href="#" class="text-white text-decoration-underline">Signaler un problème</a>
        </div>
    </div>
</div>
@endsection