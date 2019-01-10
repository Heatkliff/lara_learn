@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <table id="user_list" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <td>{!! $user->id !!}</td>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                    @if($user->group===1)
                        Administrator
                    @elseif($user->group===2)
                        Blogger
                    @elseif($user->group===3)
                        Reader
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop