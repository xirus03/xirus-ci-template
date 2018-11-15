@extends('layout.backend')

@section('title', '| Group')

@section('content')

    <div class="ui padded container segment">
        <h2 class="ui header">Group List</h2>

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
                    <a href="{{ base_url('backend/user/groups/create') }}" class="ui icon primary right floated button">
                        <i class="icon plus"></i>
                        Add Group
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
                    <th>Name</th>
                    <th>Definition</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if( count($groups) )
                    @foreach($groups as $group)
                    <tr>
                        <td class="collapsing">
                            <div class="ui fitted toggle checkbox">
                                <input type="checkbox" name="id" value="{{ $group->id }}"> 
                                <label></label>
                            </div>
                        </td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->definition }}</td>
                        <td> 
                            <a class="ui mini button orange icon" 
                                href="{{ base_url('backend/user/groups/edit/' . $group->id) }}"
                                data-tooltip="Edit Group">
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