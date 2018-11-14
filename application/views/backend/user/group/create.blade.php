@extends('layout.backend')

@section('title', '| Create Permission')

@section('content')

    <h2 class="ui header">Create New Group</h2>

    <form action="{{ base_url('backend/user/groups/insert') }}" method="post">
        <div class="ui form segment">
            <div class="field">
                <label>Name</label>
                <input placeholder="Permission Name" name="name" type="text">
            </div>

            <div class="field">
                <label>Definition</label>
                <textarea name="definition" cols="30" rows="3" placeholder="Definition"></textarea>
            </div>

            <button type="submit" class="ui submit button primary">Submit</button>
        </div>
    </form>

@endsection