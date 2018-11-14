@extends('layout.backend')

@section('title', '| Create')

@section('content')

    <h2 class="ui header">Create New User</h2>

    <form action="{{ base_url('backend/users/insert') }}" method="post">
        <div class="ui form segment">
            <div class="field">
                <label>Username</label>
                <input placeholder="Username" name="username" type="text">
            </div>

            <div class="field">
                <label>Email</label>
                <input placeholder="Email" name="email" type="email">
            </div>

            <div class="field">
                <label>Password</label>
                <input placeholder="Password" name="password" type="password">
            </div>

            <button type="submit" class="ui submit button primary">Submit</button>
        </div>
    </form>

@endsection