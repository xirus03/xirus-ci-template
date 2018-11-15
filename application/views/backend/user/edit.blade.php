@extends('layout.backend')

@section('title', '| Update')

@section('content')

    <h2 class="ui header">Update User</h2>

    <form action="{{ base_url('backend/users/update/'.$user->id) }}" method="post">
        <div class="ui form segment">
            <div class="field">
                <label>Username</label>
                <input placeholder="Username" name="username" type="text" value="{{ $user->username }}">
            </div>

            <div class="field">
                <label>Email</label>
                <input placeholder="Email" name="email" type="email" value="{{ $user->email }}">
            </div>

            <div class="field">
                <label>Groups</label>
                <select name="groups[]" multiple class="ui selection dropdown">
                    @foreach($groups as $group)
                        @foreach($user->groups as $my_group)
                            @if($group->id == $my_group->id)
                                <option value="{{$group->id}}" selected>{{ $group->name }}</option>
                                @php
                                    continue 2; 
                                @endphp
                            @endif
                        @endforeach
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="ui submit button primary">Update</button>
        </div>
    </form>

@endsection