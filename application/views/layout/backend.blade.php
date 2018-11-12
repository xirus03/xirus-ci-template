<!DOCTYPE html>
<html lang="en">
<head>
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

    @stack('styles')
</head>
<body>

    @include('includes.sidebar')

    <div class="pusher">

        @include('includes.header')

        <div class="ui main container">
            @yield('content')
        </div>
    </div>

    @stack('scripts')
    <!-- global scrips -->
    {{ script('main.js') }}

    <script>
        $('.ui.accordion').accordion();
        $('.ui.dropdown').dropdown();
    </script>
</body>
</html>