<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div style="padding: 20px;">
            @foreach ($users as $user)
                {{ $user->id }} 
                {{ $user->name }} 
                {{ $user->email }} 
                {{ $user->prefecture->name }} 
                <br>
            @endforeach
        </div>
    </body>
</html>
