@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="header-title-block">Pages</h1>

    <div class="add-page-button">
        <a href="/admin/new/page">
            Add New
        </a>
    </div>
@stop

@section('content')
    @if(count($pages)>0)
        <table id="pages_list" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Text</th>
                <th>Created</th>
                <th>Author</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)

                <tr>
                    <td>{!! $page->id !!}</td>
                    <td>{!! $page->title !!}</td>
                    <td>{!! $page->body !!}</td>
                    <td>{!! $page->created_at !!}</td>
                    <td>{!! $users[$page->author_id-1]->name !!}</td>
                    <td><a href="/admin/edit/page-{{$page->id}}">Edit</a></td>
                    <td><a class="delete-page-admins" id="{!! $page->id !!}" href="#">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div>
            You don`t have pages
        </div>
    @endif
    {{--@if(count($pages)>0)--}}
    {{--@foreach($pages as $page)--}}
    {{--<div style="border: 1px #000000 solid;">--}}
    {{--<div>{!! $page->id !!}</div>--}}
    {{--<div>{!! $page->body !!}</div>--}}
    {{--<div>{!! $page->created_at !!}</div>--}}
    {{--<div>{!! $users[$page->author_id-1]->name !!}</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--@else--}}
    {{--<div>--}}
    {{--You don`t have pages--}}
    {{--</div>--}}
    {{--@endif--}}

@stop