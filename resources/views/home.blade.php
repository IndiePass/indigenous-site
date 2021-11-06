@extends('layouts.default')
@section('page')
<header class="bg-primary text-white">
    <div class="indie-app intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                        <img src="{{ asset('/images/logo.svg') }}" alt="Indigenous" class="img-fluid">
                        <div class="row">
                            <div class="col-md-9 offset-md-3">

                            <p class="lead">A social app for the IndieWeb.</p>
                            <div class="d-flex justify-content-evenly">
                                <a href="/downloads" class="btn btn-lg btn-secondary me-3">Download Indigenous</a>
                            </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</header>
@endsection