<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Pitnik Social Network Toolkit</title>
    <link rel="icon" href="/images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="/css/main.min.css">
	<link rel="stylesheet" href="/css/weather-icon.css">
	<link rel="stylesheet" href="/css/weather-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
@yield('body')

@if (Session::get('locale') == 'en')
    <a href="/language/fr" class="float">
        <img src="/images/france.png">
    </a>
@else
    <a href="/language/en" class="float">
        <img src="/images/uk.png">
    </a>
@endif
</html>