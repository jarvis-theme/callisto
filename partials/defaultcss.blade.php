<!-- Stylesheets -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ropa+Sans" type="text/css" />
<!--[if lt IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" type="text/css" /><![endif]-->
<!-- <link rel="stylesheet" href="css/dark.css" type="text/css" /> -->
<!--[if lt IE 9]><link rel="stylesheet" href="css/ie-dark.css" type="text/css" type="text/css" /><![endif]-->
@if($tema->isiCss=='')
	{{HTML::style(dirTemaToko().'callisto/assets/css/main-stylesheet.css')}}
@else
	<style type="text/css">
		{{--$tema->isiCss--}}
	</style>
	{{HTML::style('themes/leisure/assets/css/editmain-stylesheet.css')}}
@endif

<!-- Icon Logo -->
{{createFavicon($toko)}}