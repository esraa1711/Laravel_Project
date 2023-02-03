@extends('layout')
@section("content")


        <a href="{{route('posts.create')}}"><button class="btn btn-primary">ADD</button></a>
        <a href="{{route('posts.restore')}}"><i class="fa-solid fa-arrow-rotate-left mt-5"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">desc</th>
                    <th scope="col">posted_by</th>
                    <th scope="col">created_by</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['desc'] }}</td>
                        <td>{{ $post['user_id'] }}</td>
                        <td>  {{ \Carbon\Carbon::parse($post->created_at)->format('m/d/Y') }} </td>
                        <td>
                            <a href="{{route('posts.show', [$post['id']])}}">
                                <button type="button" class="btn btn-primary">View</button>

                            </a>

                            {{-- <a href="{{route('')}}"></a> --}}
                            <button type="button" class="btn btn-success">Edit</button>
<form method="POST" action="{{route('posts.destroy' , [$post['id']])}}">
    @method('delete')
    @csrf

    <button type="submit" class="btn btn-danger delete" data-confirm="Are you sure to delete this item?">Delete</button>


</form>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @endsection
