<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> {{ $app_name }} @yield('title')</title>

<!-- style -->
{{ resource('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}
{{ resource('node_modules/semantic-ui/dist/semantic.min.css') }}
{{ style('main.css') }}
<!-- ./style -->

<!-- script header -->
{{ resource('node_modules/jquery/dist/jquery.min.js') }}
{{ resource('node_modules/semantic-ui/dist/semantic.min.js') }}
<!-- ./script header -->