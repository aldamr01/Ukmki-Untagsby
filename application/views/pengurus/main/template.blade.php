<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  	<link href="<?=base_url('assets/css/icons/icomoon/styles.css')?>" rel="stylesheet" type="text/css">
  	<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" type="text/css">
  	<link href="<?=base_url('assets/css/core.css')?>"  rel="stylesheet" type="text/css">
  	<link href="<?=base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css">
  	<link href="<?=base_url('assets/css/colors.css')?>" rel="stylesheet" type="text/css">
  	<!-- /global stylesheets -->
  	<!-- Core JS files -->
  	@yield('corejs')
    <!-- /Core JS files -->
    <title>@yield('title')</title>
  </head>
  <body>
    @yield('content')
  </body>
</html>
