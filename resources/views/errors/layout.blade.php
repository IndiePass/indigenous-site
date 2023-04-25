@extends('layouts.default')
@section('metatags')
<meta name="robots" content="noindex, nofollow" />
@endsection
@section('page')
    <div class="error-page">
        <div class="container">
    <h1 style="font-size:5rem">Ahh <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" fill="currentColor" viewBox="0 0 512 512"><path d="M512 440.1C512 479.9 479.7 512 439.1 512H71.92C32.17 512 0 479.8 0 440c0-35.88 26.19-65.35 60.56-70.85C43.31 356 32 335.4 32 312C32 272.2 64.25 240 104 240h13.99C104.5 228.2 96 211.2 96 192c0-35.38 28.56-64 63.94-64h16C220.1 128 256 92.12 256 48c0-17.38-5.784-33.35-15.16-46.47C245.8 .7754 250.9 0 256 0c53 0 96 43 96 96c0 11.25-2.288 22-5.913 32h5.879C387.3 128 416 156.6 416 192c0 19.25-8.59 36.25-22.09 48H408C447.8 240 480 272.2 480 312c0 23.38-11.38 44.01-28.63 57.14C485.7 374.6 512 404.3 512 440.1z"/></svg>, it's a @yield('code').</h1>
    <p class="text-muted">HTTP ERROR @yield('code')</p>
    <p>@yield('message')</p>
    <p>If you believe you have reached this page in error, please drop me an email.</p>
    <br><a href="/" class="btn btn-secondary btn-lg">Return Home</a>
        </div>
</div>
@endsection
@section('strap')
@endsection
