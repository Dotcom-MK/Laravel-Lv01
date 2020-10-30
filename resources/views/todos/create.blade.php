<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Create Todo</title>
</head>
<body>
    <div class="text-center pt-5">
    <h1>What next you need To-Do</h1>
    <x-alert/>
    <hr>
        <form method="post" action="/todos/create">
            @csrf
            <input type="text" name="title" placeholder="title todo" class="">
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>