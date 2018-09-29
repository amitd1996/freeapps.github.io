<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(session('info'))
                    <li style="list-style:none;" class="col-md-6 alert alert-success mt-5" >{{ session('info') }}</li>
                @endif
                    <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <td>Tags</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($posts) >0 )
                            @foreach($posts->all() as $post)
                        <tr>
                            @if($post->admins->Category == 'google')
                            <td>{{ $post->admins->Category }}</td>
                            @endif
                        </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="{{ url('create') }}">create</a>
    <a href="{{ url('home') }}">home</a>
    <a href="{{ url('browser') }}">browser</a>
    <a href="{{ url('software') }}">software</a>
    <a href="{{ url('tags') }}">tags</a>

</body>
</html>