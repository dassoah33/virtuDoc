@extends('layouts.layout-auth')

<style>
    @import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);

    .bg-estiam {
        background: {{ $bgColor }}  !important;
    }

    h3, .images-container span {
        font-family: 'Poppins', sans-serif !important;
    }

    h3 {
        font-size: calc(1rem + 1vw) !important;
        color: #4B4B4B !important;
        margin-top: 5rem;
    }

    .images-container {
        position: relative;
        width: 100%;
        height: calc(100vh - 15rem) !important;
    }

    .images-container img, .images-container span {
        position: absolute;
    }

    .images-container img {
        z-index: 1;
    }

    .images-container span {
        z-index: 2;
        letter-spacing: 8px;
        font-size: calc(2rem + 2vw) !important;
    }
</style>

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-12 col-md-12">
        <h3 class="fw-bold text-center">{{ $title }}</h3>
        <div class="images-container d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/images/cercles-' . $circlesColor . '.png') }}" alt="Cercles {{ $circlesColor }}">
            <span class="text-white fw-bold">{{ $sessionCode }}</span>
        </div>
    </div>
</div>
@endsection