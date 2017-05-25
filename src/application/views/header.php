<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{title}</title>
<!-- Favicons -->
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" href="/favicon.ico">
<!-- Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- CSS -->
<?php
if(!empty($stylsheets)) {
    foreach($stylsheets as $styleFile) {
        echo '<link href="' . base_url() . 'assets/css/' . $styleFile .'" rel="stylesheet">'."\n";
    }
}
?>
</head>
<body>
<!-- content start -->
