<!-- 
	This is the default head that will be included in the pages.
 -->

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- The title is declared in the page using ex. @section('title', 'Devsite') -->
<title>@yield('title')</title>

<!-- Reference bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}">

<!-- Reference bootstrap optional theme -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap-theme.min.css') }}">

<!-- Reference custom CSS file -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/styles.css') }}">