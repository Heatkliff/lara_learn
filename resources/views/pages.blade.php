<!doctype html>
<html>
<head>

</head>
<body>
{{--@php( dd($pages) )--}}
{{--{!! pages !!}--}}
@if(count($pages)>0)
    @foreach($pages as $page)
        <div style="border: 1px #000000 solid;">
            <div>{!! $page->id !!}</div>
            <div>{!! $page->body !!}</div>
            <div>{!! $page->created_at !!}</div>
            <div>{!! $page->author_id !!}</div>
        </div>
    @endforeach
@else
    <div>
        You don`t have pages
    </div>
@endif

</body>
</html>