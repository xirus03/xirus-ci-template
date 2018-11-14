@extends('layout.backend')

@section('title', '| Create')

@section('content')

    <h2 class="ui header">Create New Permission</h2>

    <form action="{{ base_url('backend/user/permissions/insert') }}" method="post">
        <div class="ui form segment">
            <div class="field">
                <label>Name</label>
                <input placeholder="Permission Name" name="name" type="text">
            </div>

            <div class="field">
                <label>Definition</label>
                <textarea name="definition" cols="30" rows="3" placeholder="Definition"></textarea>
            </div>

            <div class="field">
                <label>Groups</label>
                <select name="groups[]" multiple class="ui selection dropdown">
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="ui submit button primary">Submit</button>
        </div>
    </form>

@endsection