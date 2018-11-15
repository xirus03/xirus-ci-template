@extends('layout.backend')

@section('title', '| Edit')

@section('content')

    <h2 class="ui header">Edit Permission</h2>

    <form action="{{ base_url('backend/user/permissions/update/'.$permission->id) }}" method="post">
        <div class="ui form segment">
            <div class="field">
                <label>Name</label>
                <input placeholder="Permission Name" name="name" type="text" value="{{ $permission->name }}">
            </div>

            <div class="field">
                <label>Definition</label>
                <textarea name="definition" cols="30" rows="3" placeholder="Definition">{{ $permission->definition }}</textarea>
            </div>

            <button type="submit" class="ui submit button primary">Update</button>
        </div>
    </form>

@endsection