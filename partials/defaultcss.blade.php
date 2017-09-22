<!-- Stylesheets -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ropa+Sans" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!--[if lt IE 9]>{{generate_theme_css('callisto/assets/css/ie.css')}}<![endif]-->
<!-- {{generate_theme_css('callisto/assets/css/dark.css')}} -->
<!--[if lt IE 9]>{{generate_theme_css('callisto/assets/css/ie-dark.css')}}<![endif]-->
@if($tema->isiCss=='')
    {{generate_theme_css('callisto/assets/css/main-stylesheet.css?v=003')}} 
@else
    {{generate_theme_css('callisto/assets/css/editmain-stylesheet.css?v=003')}} 
@endif

{{generate_theme_css('callisto/assets/css/jquery.fancybox.css')}} 
{{generate_theme_css('callisto/assets/css/bootstrap.min.css')}} 

<!-- favicon -->
{{favicon()}} 