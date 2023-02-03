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

    </div>
    <hr>
    @endsection
