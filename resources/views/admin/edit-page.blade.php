@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit page</h1>
@stop

@section('content')

    <form action="">
        <div class="title-edit-page">
            <input type="text" value="{{ $page[0]->title }}">
        </div>
        <div class="content-edit-page">
            <textarea name="" id="" cols="30" rows="10">{{ $page[0]->body }}</textarea>
        </div>
    </form>
    <pre>
        @php(print_r($page[0]))
    </pre>
@stop