<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="container">
        <h1>Add Post</h1>
        <a href="{{url('post')}}">BACK</a>
    </div>
    <div class="form">
        <form action="{{ url('post')}}" method="POST">
            @csrf
            <input type="text" name="title" id="title" placeholder="Title">
            <br>
            @error('title')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="text" name="description" id="description" placeholder="Description">
            <br>
            @error('description')
            <span>{{$message}}</span>
        @enderror
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    
</body>
</html>