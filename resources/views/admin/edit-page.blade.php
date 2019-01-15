@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @if(isset($page))
        <h1 class="header-title-block">Edit page</h1>
        <div class="add-page-button">
            <a href="/admin/new/page">
                Add New
            </a>
        </div>
    @else
        <h1 class="header-title-block">New page</h1>
    @endif
@stop

@section('content')
    <div class="edit-page-content">
        <div class="block-edit-page">
            <div class="title-edit-page">
                <input type="text" value="@if(isset($page)){{ $page[0]->title }}@endif">
            </div>
            <div class="content-edit-page">
                <textarea name="" cols="30" rows="10">@if(isset($page)){{ $page[0]->body }}@endif</textarea>
                <input id="page_id" type="hidden" value="@if(isset($page)) {{ $page[0]->id }} @else 0 @endif">
            </div>
        </div>
        <div class="publish-block">
            <h3 class="title-publish-block">Publish</h3>
            @if(isset($page))
                <div class="line-publish-block">
                    <i class="fa fa-fw fa-rocket"></i>
                    Status: @if($page[0]->open) Public @else Private @endif
                </div>
            @endif
            @if(isset($page))
                <div class="line-publish-block">
                    <i class="fa fa-fw fa-calendar-o" aria-hidden="true"></i>
                    Updated on: {{ $page[0]->updated_at }}
                </div>
            @endif
                <div class="line-publish-block">
                    <i class="fa fa-fw fa-user" aria-hidden="true"></i>
                    Author: @if(isset($page)){{ $users[$page[0]->author_id - 1]->name }}@else {{$users[$user_now-1]->name}}@endif
                    <input id="author_page" type="hidden" value="@if(isset($page)){{ $page[0]->author_id }}@else {{ $user_now }}@endif">
                </div>

            <div class="update-block">
                @if(isset($page))<a href="#" class="trash-page-link">Move to trash</a>@endif
                <div class="button-update-page" id="@if(isset($page)){{"update-page"}}@else{{"new-page"}}@endif"><a href="#">Update</a></div>
            </div>
        </div>
    </div>
    <pre>
{{--        @php(print_r($page[0]))--}}
    </pre>
@stop