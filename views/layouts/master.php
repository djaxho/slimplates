<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$this->e($title)?></title>
    <!-- ↓↓↓ Style CSS ↓↓↓ -->
    <link rel="stylesheet" href="<?= $this->slim()->baseUrl(); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?= $this->slim()->baseUrl(); ?>/css/app.css" />
    <script src="<?= $this->slim()->baseUrl(); ?>/js/vendor/modernizr.js"></script>
    <!-- ↓↓↓ The Fonts ↓↓↓ -->
	<link href='//fonts.googleapis.com/css?family=Passion+One:400,700|Oswald:400,300,700|Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'/>
	<link href="http://fonts.googleapis.com/css?family=Raleway:600,400,200" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

  </head>
  <body>

    <?=$this->section('content')?>
    
    <script src="<?= $this->slim()->baseUrl(); ?>/js/vendor/jquery.js"></script>
    <script src="<?= $this->slim()->baseUrl(); ?>/js/foundation.min.js"></script>
    <script src="<?= $this->slim()->baseUrl(); ?>/js/app.js"></script>
    <script src="<?= $this->slim()->baseUrl(); ?>/js/foundation/foundation.clearing.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
