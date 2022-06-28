<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="container">
        <h1>Edit Post</h1>
        <a href="{{url('post')}}">BACK</a>
    </div>
    <div class="form">
        <form action="{{ url('post/'.$post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" id="title" placeholder="Title" value="{{$post->title}}">
            <br>
            @error('title')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <input type="text" name="description" id="description" placeholder="Description" value="{{$post->description}}">
            <br>
            
            @error('title')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            <button type="submit">Update</button>
        </form>
    </div>

    
</body>
</html>