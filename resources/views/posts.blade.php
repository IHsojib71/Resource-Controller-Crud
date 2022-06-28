<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Posts</title>

 
      
  <body>
    <div class="status">
        @if (session('status'))
        <h4 style="background-color: green;color:white">{{ session('status')}}</h4>
    @endif
    </div>
    
    <div class="container">
        <h1>Simple CRUD Using Resource Controller</h1>
        <a href="{{ url('post/create') }}">Create New Post</a>
    </div>
    <div class="table">
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($post as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->description}}</td>
                    <td><a href="{{url('post/'.$p->id.'/edit   ')}}">Edit</a></td>
                    <td>
                        <form action="{{ url('post/'.$p->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                    
                    
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
  </body>
</html>
