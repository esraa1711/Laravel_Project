<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
    a{
        list-style: none;
        font-weight: bold;
        text-decoration: none;
        font-size: 25px;
    }
    P{
        font-size: 20px;
        font-weight: bold;
        padding: 1rem;
        }
</style>
<body>
<div class="container">

        @yield("content")


    </div>
</body>
</html>
