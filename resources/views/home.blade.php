@extends('layouts.default')
@section('page')
<header id="intro" class="bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 h-x-app">
                <img src="{{ asset('/images/logo-solid.svg') }}" alt="Indigenous" class="img-fluid u-logo">
                <h1 class="sr-only p-name">Indigenous</h1>
                <p class="lead py-3 p-summary">A social app for the IndieWeb.</p>
                <a href="https://indigenous.marksuth.dev/downloads" class="btn btn-lg btn-secondary me-3 u-url">Download Indigenous</a>
            </div>
        </div>
    </div>
</header>

<section id="android" class="pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex">
                    <div class="col-md-8 order-md-last">
                        <h2>Indigenous on Android</h2>
                        <div class="row">
                            <div class="col-4">
                        <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous" class="p-1"><img src="{{ asset('/images/google-play-badge.svg') }}" height="50" alt="Get it on Google Play" class="img-fluid"></a>
                            </div>
                            <div class="col-4">
                        <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous"><img src="{{ asset('/images/fdroid-badge.svg') }}" alt="Get it on F-Droid" height="50"  class="img-fluid"></a>
                            </div>
                        </div>
                        <p><strong>New 2.0 version coming early 2022!</strong></p>
                        <p>Found an issue with the app or have any feedback or suggestions?<br> Raise an issue <a href="https://github.com/marksuth/indigenous-android/issues">on GitHub</a>.</p>

                    </div>
                    <div class="col-md-4 order-md-first">
                        <img src="{{ asset('/images/android-screenshot.png') }}" alt="Indigenous on iOS" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="desktop" class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-7 py-5">
                        <h2>Indigenous on Desktop</h2>
                        <p>Available on Windows, Linux and macOS (Intel chip & Apple Silicon).</p>
                        <p><a href="/downloads" class="btn btn-primary me-3">Download Indigenous</a><br><span class="text-muted">Current version 1.3.0</span>
                        </p>
                        <p><strong>New 2.0 version coming early 2022!</strong></p>
                        <p>Found an issue with the app or have any feedback or suggestions?<br> Raise an issue <a href="https://github.com/marksuth/indigenous-desktop">on GitHub</a>.</p>

                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('/images/indigenous-desktop-screenshot.png') }}" alt="Indigenous on Desktop" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="ios" class="pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Indigenous on iOS</h2>
                        <p>Available on iPhone and iPad (minimum iOS 11)</p>
                        <a href="https://apps.apple.com/us/app/indigenous-social-timeline/id1271004584?itsct=apps_box_badge&amp;itscg=30200" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1532908800&h=b531d731c3a5a6b9226772f0011d0782" alt="Download on the App Store" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"></a>
                        </p>
                        <p><strong>New 2.0 version coming early 2022!</strong></p>
                        <p>Found an issue with the app or have any feedback or suggestions?<br> Raise an issue <a href="https://github.com/marksuth/indigenous-ios">on GitHub</a>.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/images/ios-screenshot.png') }}" alt="Indigenous on iOS" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection