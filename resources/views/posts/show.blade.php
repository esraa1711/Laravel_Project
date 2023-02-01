@extends("layout")
@section("title")
Show
@endsection
@section("content")


    <div class="title">
        <a href="{{route('posts')}}">All Posts</a>
    </div>
    <div class="info border">

        <p>Title : {{$post['title']}}</p>
        <p>Description : {{ $post['desc'] }}</p>
        <p>Created_at : {{$post['created_by']}}</p>
        <p>Posted_by : {{$post['posted_by']}}</p>
    </div>
    <hr>
    @endsection
