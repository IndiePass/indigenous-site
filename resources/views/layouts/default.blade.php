<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="@yield('metadescription', 'A Social Feed Reader for the IndieWeb')" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Indigenous - @yield('title')" />
  <meta property="og:description" content="@yield('metadescription')" />
  <meta property="og:url" content="@yield('ogurl', config('app.url'))" />
  <meta property="og:site_name" content="Indigenous" />
  <meta property="og:image" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'og-logo.jpg')" />
  <meta property="og:image:secure_url" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'og-logo.jpg')" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="@yield('metadescription', 'A Social Feed Reader for the IndieWeb' )" />
  <meta name="twitter:title" content="Indigenous - @yield('title')" />
  <meta name="twitter:image" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'og-logo.jpg')" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <meta name="theme-color" content="#D54049">
  <title>@yield('title') Indigenous - A Social Feed Reader for the IndieWeb</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('extrastyles')
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary" aria-label="Fourth navbar example">
    <div class="container">
      <a class="h-app u-url navbar-brand" href="{{ env('APP_URL')}}"><img src="/images/logo.svg" alt="Indigenous" height="40" width="183" class="me-1 u-logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL')}}/android">Android</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL')}}/desktop">Desktop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL')}}/downloads">Downloads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL')}}/support">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://marksuth.dev/tag/indigenous/">Updates</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('page')
  <footer class="site-footer bg-dark text-white py-4 small">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <img src="/images/logo.svg" alt="Indigenous" height="40" width="183" class=" mb-3" />
          <nav class="nav">
            <a href="{{ env('APP_URL')}}/support" class="nav-link text-muted ps-0">Support</a>
            <a href="{{ env('APP_URL')}}/privacy" class="nav-link text-muted">Privacy</a>
          </nav>
        </div>
        <div class="col-lg-8 text-end">
          <p>Maintained by <a class="text-muted" href="https://marksuth.dev">Mark Sutherland</a>.<br> Originally developed by <a class="text-muted" href="https://eddiehinkle.com">Eddie Hinkle</a>. Desktop &amp; Android verison originally developed by <a class="text-muted" href="https://realize.be">realize.be</a>.<br> Licensed under <a href="https://opensource.org/licenses/GPL-3.0" class="text-muted">GPL-3.0</a>.</p>
          <p>This site is carbon offset via <a href="https://treepoints.green/?ref=tTANfORx1u9H" rel="noopener" class="text-muted"><i class="fas fa-tree"></i> TreePoints</a> and hosted on <a href="https://m.do.co/c/0af74d4b6f61" class="text-muted"><i class="fab fa-digital-ocean"></i> Digital Ocean</a>.
        </div>
      </div>

    </div>
  </footer>
  <script src="/js/app.js" type="application/javascript"></script>
  @yield('extrascripts')
</body>

</html>