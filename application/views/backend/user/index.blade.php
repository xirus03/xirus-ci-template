@extends('layout.backend')

@section('title', '| Users')

@section('content')

    <div class="ui padded container segment">
        <h2 class="ui header">Users List</h2>

        <div class="ui grid">
            <div class="four column row">
                <div class="left floated column">
                    <div class="ui action input filter">
                        <select class="ui selection dropdown flat-right">
                            <option value="First Name">First Name</option>
                            <option value="Last Name">Last Name</option>
                            <option value="Permission">Permission</option>
                        </select>
                        <input class="flat-left" type="text" placeholder="Search...">
                        <button class="ui button">Search</button>
                    </div>
                </div>
                <div class="right floated column">
                    <a href="{{ base_url('backend/users/create') }}" class="ui icon primary right floated button">
                        <i class="icon user"></i>
                        Add User
                    </a>
                </div>
            </div>
        </div>
        
        <table class="ui striped selectable table blue">
            <thead>
                <tr>
                    <th class="two wide">
                        <div class="ui checkbox">
                            <input type="checkbox"> <label>Select All</label>
                        </div>   
                    </th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Joined Date</th>
                    <th>Groups</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if( count($users) )
                    @foreach($users as $user)
                    <tr>
                        <td class="collapsing">
                            <div class="ui fitted toggle checkbox">
                                <input type="checkbox" name="id" value="{{ $user->id }}"> 
                                <label></label>
                            </div>
                        </td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->date_created }}</td>
                        <td>
                            @foreach($user->groups as $group)
                                <label class="ui blue label" data-tooltip="{{ $group->definition }}">
                                    {{ $group->name }}
                                </label>
                            @endforeach
                        </td>
                        <td> 
                            <a class="ui mini button primary icon" 
                                href="{{ base_url('backend/users/show/' . $user->id) }}"
                                data-tooltip="View User Information">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="ui mini button orange icon" 
                                href="{{ base_url('backend/users/edit/' . $user->id) }}"
                                data-tooltip="Edit User Information">
                                <i class="fa fa-pencil"></i>
                            </a>                           
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No record to display.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

@endsection