@extends('layouts.default')
@section('page')
<header class="bg-primary text-white mb-4 py-3">
    <div class="container">
        <h1>Downloads</h1>
    </div>
</header>
<main class="container">
    <div class="alert alert-info">
        <strong>Note:</strong> The desktop and iOS versions of this app are in the process of being re-written from scratch. To stay up to date with progress, please follow the blog.
    </div>
    </div>

    <div class="row justify-content-evenly">
        <div class="col-lg-4">
            <h2 class="text-primary">Desktop Version</h2>
            <p><strong>Verison</strong> 1.2.0 (released 14/10/20) <a class="text-muted" href="https://github.com/marksuth/indigenous-desktop">GitHub Repo</a></p>
            <ul class="list-group mb-3">
                <li class="list-group-item"><i class="bi bi-windows"></i> <a href="https://github.com/marksuth/indigenous-desktop/releases/download/v1.2.0/Indigenous-for-desktop-Win32-x64-1.2.0.zip?">Windows (32 & 64 bit)</a></li>
                <li class="list-group-item"><i class="bi bi-apple"></i> <a href="https://github.com/marksuth/indigenous-desktop/releases/download/v1.2.0/Indigenous-for-desktop-MacOS-1.2.0.zip">macOS (Intel Chip)</a></li>
                <li class="list-group-item"><i class="bi bi-download"></i> <a href="https://github.com/marksuth/indigenous-desktop/releases/download/v1.2.0/Indigenous-for-desktop-Linux-x64-1.2.0.zip">Linux (64 bit)</a></li>
                <li class="list-group-item"><i class="bi bi-download"></i> <a href="https://github.com/marksuth/indigenous-desktop/archive/refs/tags/v1.2.0.zip">Source Code (zip)</a></li>
                <li class="list-group-item"><i class="bi bi-download"></i> <a href="https://github.com/marksuth/indigenous-desktop/archive/refs/tags/v1.2.0.tar.gz">Source Code (tar.gz)</a></li>
            </ul>
            <h3>Installation Notes</h3>
            <h4>Linux</h4>
            <p>Unzip && cd Indigenous-linux-x64 && ./Indigenous</p>
            <h4>Windows</h4>
            <p>Unzip, go in to the folder and double click 'Indigenous'. You will have to 'Right Click' on 'Indigenous' -> 'Properties' and toggle 'Unblock' the first time.</p>
            <h4>macOS</h4>
            <p>unzip and double click the app. You will likely have to open it with 'Right Click' -> 'Open' the first time.</p>
        </div>
        <div class="col-lg-4">
            <h2 class="text-primary">iOS Version</h2>
            <p><strong>Verison</strong> 1.0.2 (released 2018) <a class="text-muted" href="https://github.com/marksuth/indigenous-ios">GitHub Repo</a></p>
            <a href="https://apps.apple.com/us/app/indigenous-social-timeline/id1271004584?itsct=apps_box_badge&amp;itscg=30200" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1532908800&h=b531d731c3a5a6b9226772f0011d0782" alt="Download on the App Store" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"></a>
            <div class="row mt-4">
            <div class="col-4"><img src="https://tools-qr-production.s3.amazonaws.com/output/apple-toolbox/fdba1eeb735cd4eef3a253f1b0f17cba/db7569044802384de87520860002bf0d.png" class="img-fluid"></div>
            <div class="col-8 pt-4"><p>Scan the QR code on your iPhone to download the app</p></div>
        </div>
        </div>
    </div>
</main>
@endsection