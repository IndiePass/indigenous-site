@extends('layouts.default')
@section('page')
<header class="bg-primary text-white mb-4 py-3">
    <div class="container">
                <h1>Indigenous on iOS</h1>
    </div>
</header>
<section id="ios" class="pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-9 py-5">
                        <p>Available on iPhone and iPad (minimum iOS 11)</p>
                        <a href="https://apps.apple.com/us/app/indigenous-social-timeline/id1271004584?itsct=apps_box_badge&amp;itscg=30200" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1532908800&h=b531d731c3a5a6b9226772f0011d0782" alt="Download on the App Store" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"></a>
                        </p>
                        <p><strong>New 2.0 version coming early 2022!</strong></p>
                        <p class="mb-5 pb-5">Found an issue with the app or have any feedback or suggestions? Raise an issue <a href="https://github.com/marksuth/indigenous-ios/issues">on GitHub</a>.</p>

                    </div>
                    <div class="col-md-3 pt-5">
                        <p>&nbsp;</p>
                        <img src="{{ asset('/images/ios-screenshot.png') }}" alt="Indigenous on iOS" class="mt-5 img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection