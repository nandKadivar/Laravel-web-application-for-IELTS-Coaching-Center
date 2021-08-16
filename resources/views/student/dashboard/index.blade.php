@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<section class="d-flex flex-column p-2 align-items-center" style="background-color: #333; height: 22vh; box-shadow: 3px 5px 6px rgba(0, 0, 0, .2);">
    <div class="d-flex flex-row align-items-center justify-content-between col-md-12 p-2">
        <img src="/media/logos/logo-1.svg" />
        <div class="d-flex flex-row align-items-center justify-content-around col-md-1">
            <a href="" class="">
                <i class="fas fa-bell" style="font-size: 24px; color: #797979"></i>
            </a>
            <a href="" class="">
                <i class="fas fa-user-circle" style="font-size: 24px; color: #797979"></i>
            </a>
        </div>
    </div>
    {{-- <div class="d-flex flex-row align-items-center justify-content-start col-md-8 p-2"> --}}
        {{-- <a href="" class="nav-link" style="color: #f7f7f7; text-decoration: none; margin-right: 50px; font-size: 18px;">
            Listening
        </a>
        <a href="" class="nav-link" style="color: #f7f7f7; text-decoration: none; margin-right: 50px; font-size: 18px;">
            Reading
        </a>
        <a href="" class="nav-link" style="color: #f7f7f7; text-decoration: none; margin-right: 50px; font-size: 18px;">
            Writing
        </a>
        <a href="" class="nav-link" style="color: #f7f7f7; text-decoration: none; margin-right: 50px; font-size: 18px;">
            Speaking
        </a> --}}
        <div class="d-flex col-md-12 flex-row align-items-center" style="padding: 20px">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    {{-- </div> --}}
</section>

<section class="d-flex flex-column justify-content-start" style="background-color: #f7f7f7; height: 78vh;">
    <div class="d-flex flex-row align-items-center justify-content-between col-md-12 p-4">
        <div style="color: #808080; font-size: 18px;">Resources</div>
        <div class="" style="border-top: 1px solid #808080ab; width: 94%; margin-top: 6px;">
            
        </div>
    </div>
    <div class="d-flex flex-row flex-wrap align-items-center justify-content-between col-md-12 p-4">
        <div class="d-flex flex-column align-items-start justify-content-start col-md-7" style="height: 500px;">
            <div class="d-flex flex-row align-items-center justify-content-between col-md-12">
                <div class="d-flex flex-row align-items-center justify-content-start card-1">
                    <i class="fas fa-users" style="font-size: 35px; color: #4ec34a"></i>
                    <p style="font-size: 25px;margin-left: 20px; margin-bottom: 0; font-family: arial; font-weight: 500;">Classes</p>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-start card-1">
                    <i class="fas fa-pencil-alt" style="font-size: 35px; color: #f13226"></i>
                    <p style="font-size: 25px;margin-left: 20px; margin-bottom: 0; margin-bottom: 0; font-family: arial; font-weight: 500;">Mock Test</p>
                </div>
            </div>
            <div class="mt-5 d-flex flex-row align-items-center justify-content-between col-md-12">
                <div class="d-flex flex-row align-items-center justify-content-start card-2">
                    <i class="fas fa-calendar-alt" style="font-size: 35px; color: #ffc107"></i>
                    <p style="font-size: 25px;margin-left: 20px; margin-bottom: 0; font-family: arial; font-weight: 500;">Schedule</p>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-start card-2">
                    <i class="fas fa-rocket" style="font-size: 35px; color: #45489a"></i>
                    <p style="font-size: 25px;margin-left: 20px; margin-bottom: 0; font-family: arial; font-weight: 500;">Progress</p>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-start card-2">
                    4
                </div>
            </div>
            <div class="mt-5 d-flex flex-row align-items-center justify-content-between col-md-12">
                <div class="d-flex flex-row align-items-center justify-content-start col-md-3 card-2" style="background-color: #4c6ef4">
                    {{-- <i class="fas fa-calendar-alt" style="font-size: 35px; color: #ffc107"></i> --}}
                    <i class="fab fa-telegram" style="font-size: 45px; color: #fff"></i>
                    <p style="font-size: 25px;margin-left: 20px; margin-bottom: 0; font-family: Dancing Script; font-weight: bold; color: #fff">Join Community</p>
                </div>
                {{-- <div class="d-flex flex-row align-items-center justify-content-start col-md-3 card-2">
                    <i class="fas fa-rocket" style="font-size: 35px; color: #45489a"></i>
                    <p style="font-size: 25px;margin-left: 20px; font-family: arial; font-weight: 500;">Progress</p>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-start col-md-3 card-2">
                    4
                </div> --}}
            </div>
        </div>
        <div class="d-flex flex-column align-items-center col-md-4" style="height: 500px;">
            <div class="d-flex align-items-center justify-content-center col-md-12" style="height: 200px;">
                1
            </div>
            <div class="d-flex flex-row align-items-center justify-content-between col-md-12 py-4">
                <div style="color: #808080; font-size: 18px;">Materials</div>
                <div class="" style="border-top: 1px solid #808080ab; width: 83%; margin-top: 5px;">
                    
                </div>
            </div>
            <div class="d-flex flex-row align-items-center justify-content-between col-md-12" style="margin-top: 20px;">
                <div class="d-flex flex-column align-items-center card-3">
                    <i class="fas fa-headphones" style="font-size: 55px; color: #f13226"></i>
                    <div class="p-2 card-label">
                        Listening
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center card-3">
                    <i class="fas fa-book-open" style="font-size: 55px; color: #4c6ef4"></i>
                    <div class="p-2 card-label">
                        Reading
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center card-3">
                    <i class="fas fa-file-alt" style="font-size: 55px; color: #45489a"></i>
                    <div class="p-2 card-label">
                        Writing
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center card-3">
                    <i class="fas fa-comments" style="font-size: 55px; color: #ff9800"></i>
                    <div class="p-2 card-label">
                        Speaking
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
