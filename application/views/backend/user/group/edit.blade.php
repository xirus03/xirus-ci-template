@extends('layout.backend')

@section('title', '| Edit')

@section('content')

    <h2 class="ui header">Edit Group</h2>

    <form action="{{ base_url('backend/user/groups/update/'.$group->id) }}" method="post">
        <div class="ui form segment">
            <div class="field">
                <label>Name</label>
                <input placeholder="Group Name" name="name" type="text" value="{{ $group->name }}">
            </div>

            <div class="field">
                <label>Definition</label>
                <textarea name="definition" cols="30" rows="3" placeholder="Definition">{{ $group->definition }}</textarea>
            </div>

            <div class="field">
                <label>Permissions</label>
                <select name="permissions[]" multiple class="ui selection dropdown">
                    @foreach($permissions as $permission)
                        @foreach($group->permissions as $my_permission)
                            @if($permission->id == $my_permission->id)
                                <option value="{{$permission->id}}" selected>{{ $permission->name }}</option>
                                @php
                                    continue 2; 
                                @endphp
                            @endif
                        @endforeach
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="ui submit button primary">Update</button>
        </div>
    </form>

@endsection