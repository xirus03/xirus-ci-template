<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    @stack('styles')
</head>
<body>

    @include('includes.sidebar')

    <div class="pusher">

        @include('includes.header')

        <div class="ui main container">
            @include('includes.alert_message')

            @yield('content')
        </div>
    </div>

    @stack('scripts')
    <!-- global scrips -->
    {{ script('main.js') }}

    <script>
        $('.ui.accordion').accordion();
        $('.ui.dropdown').dropdown();
        $('.message .close')
            .on('click', function() {
                $(this)
                .closest('.message')
                .transition('fade');
            })
    </script>
</body>
</html>