<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    <style>
        .column.small{
            margin-top: 5em;
            width: 40% !important;
        }
        .ui.message{
            margin-left: 0 !important;
        }
    </style>

    <script>
        $(document)
            .ready(function() {
            $('.ui.form')
                .form({
                fields: {
                    email: {
                    identifier  : 'email',
                    rules: [
                        {
                        type   : 'empty',
                        prompt : 'Please enter your e-mail'
                        },
                        {
                        type   : 'email',
                        prompt : 'Please enter a valid e-mail'
                        }
                    ]
                    },
                    password: {
                    identifier  : 'password',
                    rules: [
                        {
                        type   : 'empty',
                        prompt : 'Please enter your password'
                        },
                        {
                        type   : 'length[6]',
                        prompt : 'Your password must be at least 6 characters'
                        }
                    ]
                    }
                }
                })
            ;
            })
        ;
    </script>
</head>
<body>
    <div class="ui middle aligned center aligned grid">
        <div class="column small">
            @include('includes.alert_message')

            <h2 class="ui teal image header">
                <img src="assets/images/logo.png" class="image">
                <div class="content">
                    Log-in to your account
                </div>
            </h2>

            <form action="{{ base_url('backend/auth/authenticate') }}" method="post" class="ui large form">
                <div class="ui stacked segment">
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-mail address">
                    </div>
                    </div>
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    </div>
                    <div class="ui fluid large teal submit button">Login</div>
                </div>

                <div class="ui error message"></div>
            </form>

            <div class="ui message">
                New to us? <a href="#">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>