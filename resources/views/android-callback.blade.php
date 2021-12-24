<?php
$code = isset($_GET['code']) ? $_GET['code'] : '';
$state = isset($_GET['state']) ? $_GET['state'] : '';
$url = 'indigenous-android://oauthcallback?code=' . $code . '&state=' . $state;
?>
<html>
<head>
  <title>IndiePass Android</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="refresh" content="0; url=<?php print $url; ?>" />
</head>
<body>

IndiePass OAuth Sign in.
<br /><br />
If IndiePass is not opening, <a href="<?php echo $url; ?>">click here</a>


</body>
</html>
