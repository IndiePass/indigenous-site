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
<section id="desktop" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Indigenous on Desktop</h2>
                        <p>Available on Windows, Linux and macOS (Intel chip & Apple Silicon).</p>
                        <p><a href="/downloads" class="btn btn-primary me-3">Download Indigenous</a> <span class="text-muted">Current version 1.2.0</span>
                        </p>
                        <p><strong>New 2.0 version coming early 2022!</strong></p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('/images/indigenous-desktop-screenshot.png') }}" alt="Indigenous on Desktop" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="h5">General Features</h3>
                        <ul class="list-unstyled">
                            <li>Uses the font of your system</li>
                            <li>Accounts: configure endpoints and token
                                Screen state: remember position, fullscreen etc</li>
                            <li>Developer: view response of microsub requests in console</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="h5">Microsub Features</h3>
                        <ul class="list-unstyled">
                            <li>Read channels and posts per timeline</li>
                            <li>Inline reply, like, bookmark, read and repost with or without confirmation</li>
                            <li>Inline RSVP on events</li>
                            <li>Listen to audio or watch video</li>
                            <li>Long articles open in an overlay</li>
                            <li>Mark all read button</li>
                            <li>View individual feed via author name</li>
                            <li>Search in all channels and feeds</li>
                            <li>Delete or move posts</li>
                            <li>Context menu: right click when selecting text to search DuckDuckGo, or save an image, or copy the link and so on.</li>
                            <li>External links in posts are opened in your system browser</li>
                            <li>Navigate posts with keyboard shortcuts</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="h5">Micropub Features</h3>
                        <ul class="list-unstyled">
                            <li>Post types: note/article</li>
                            <li>Upload images, audio and video</li>
                            <li>Syndication targets</li>
                            <li>Publish date and status</li>
                            <li>Tags, with autocomplete</li>
                            <li>Upload a file to media endpoint</li>
                        </ul>
                    </div>
                </div>
                <p>Found an issue with the app or have any feedback or suggestions? Raise an issue <a href="https://github.com/marksuth/indigenous-desktop">on GitHub</a>.</p>
            </div>
        </div>
</section>
<section id="ios" class="bg-light pt-5">
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
                        <p>Found an issue with the app or have any feedback or suggestions? Raise an issue <a href="https://github.com/marksuth/indigenous-ios">on GitHub</a>.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/images/indigenous-ios-screenshot.png') }}" alt="Indigenous on iOS" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection