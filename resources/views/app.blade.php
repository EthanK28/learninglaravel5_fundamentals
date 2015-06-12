<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}"/>
</head>
<body>
	<div class="container">
        @include('flash::message')
            {{--flash_notification.message--}}
        {{--@include('partials.flash')--}}
		@yield('content')
	</div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>>

    <script>
        $('#flash-overlay-modal').modal();
//        $('div.alert').not('alert-important').delay(3000).slideUp();
    </script>

	@yield('footer')
</body>
</html>

