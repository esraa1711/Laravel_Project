<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <a href="{{route('posts.create')}}">
<button class="btn btn-primary">ADD</button>

        </a>
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
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_by'] }}</td>
                        <td>
                            <a href="{{route('posts.show', [$post['id']])}}">
                                <button type="button" class="btn btn-primary">View</button>

                            </a>

                            {{-- <a href="{{route('')}}"></a> --}}
                            <button type="button" class="btn btn-success">Edit</button>

                            <a href="{{route('posts.destroy' , [$post['id']])}}" class="btn btn-danger delete" data-confirm="Are you sure to delete this item?" >Delete</a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

 <script>
    var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        var choice = confirm(this.getAttribute('data-confirm'));

        if (choice) {
            window.location.href = this.getAttribute('href');
        }
    });
}
 </script>
