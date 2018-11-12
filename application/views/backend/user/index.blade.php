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
                    <button class="ui icon primary right floated button">
                        <i class="icon user"></i>
                        Add User
                    </button>
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
                    <th>Status</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="collapsing">
                        <div class="ui fitted toggle checkbox">
                            <input type="checkbox"> <label></label>
                        </div>
                    </td>
                    <td>John</td>
                    <td>No Action</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td class="collapsing">
                        <div class="ui fitted toggle checkbox">
                        <input type="checkbox"> <label></label>
                        </div>
                    </td>
                    <td>John</td>
                    <td>No Action</td>
                    <td>None</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection